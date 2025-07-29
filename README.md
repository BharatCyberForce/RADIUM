# ⚛️ Radium Shell

![PHP](https://img.shields.io/badge/PHP-Enabled-blue.svg)
![Status](https://img.shields.io/badge/status-Active-brightgreen.svg)
![License](https://img.shields.io/badge/license-MIT-green.svg)
![Security](https://img.shields.io/badge/security-Ethical%20Use%20Only-critical)

---
**Radium** is a Web Based PHP Shell designed for Advanced Server Management. It Provides a Rich Interface For Interacting With A Server File System.
---


## ✅ Tested On

- ✅ **PHP Versions:** 5.6, 7.0–7.4, 8.0–8.3
- ✅ **Web Servers:** Apache2, Nginx, LiteSpeed etc,etc.
- ✅ **CMS Compatibility:** WordPress (5.x–6.x)
- ✅ **Bypass
  
> ⚙️ *Minimum PHP:* `5.6`  
> 🧩 *Recommended:* PHP `7.4+`



## Features

| Module             | Description                                                                 |
|--------------------|-----------------------------------------------------------------------------|
| File Manager     | Copy, move, delete, rename, edit, and change file permissions              |
| Compression      | ZIP and UNZIP file and folder                                    |
| CMD Interface     | Execute shell commands and receive real-time output                        |
| Adminer          | Embedded Adminer (MySQL database manager)                      |
| CPU Info         | View CPU usage, model, cores, and threads                         |
| Server Info      | Server IP, OS details, disk usage, PHP version              |
| File Creator     | Create new files.                                                  |
| Add Admin        | Add new admin account to common CMS systems (Now only available for WordPress)      |
| Backdoor Uploader| Upload persistent backdoors (reverse shell)              |
| Auto Recovery    | Auto-download on server and silently inject in server              (Soon)             |
| Credential Harvester | Scan for and collect stored credentials (Soon) |


## 🛡️ Security Software / WAFs Bypassed

Radium Shell has been tested against the following **server security suites** and **WAFs**. Where possible, payloads and commands were successfully executed or uploaded.

| Software / WAF                  | Bypass Status | Notes                                                              |
|----------------------------------|----------------|--------------------------------------------------------------------|
| **Imunify360**                   | ✅ Bypassed     | Without obfuscate bypassed                                         |
| **ModSecurity (OWASP CRS)**      | ✅ Bypassed     | Payload evasion and encoding bypass rule sets (Without obfuscate bypassed)                      |
| **CSF / LFD**                    | ✅ Bypassed     | No alerts                                                          |
| **cPanel Hardened PHP**          | ✅ Partial      | Works unless all exec functions disabled                           |
| **Wordfence (WordPress)**        | ✅ Bypassed     | Fully bypassed                           |
| **All-In-One WP Security**       | ✅ Bypassed     | File uploads succeeded         (Without obfuscate bypassed)       |
| **ImunifyAV (Lite)**             | ✅ Bypassed     | Payload not detected     (Without obfuscate bypassed)                                          |
| **ModSec Rules**                 | ✅ Bypassed     | Custom payloads not flagged during upload     (Without obfuscate bypassed)                     |

Remember: Mostly security bypassed without obfuscate but did not bypassed with obfuscate (because we used publicly available obfuscation.)

---

## 📸 Screenshots

**
### Filemanager
![Main Page Of Sh3ll](img/main.png)
Upload Files, Edit Files, Set Permissions,Delete.


### Server Info
![Server Info](img/serverinfo.png)
Displays Server Information.

### CPU Info
![CPU Info](img/cpuinfo.png)
Displays CPU model, core/thread usage.

### Terminal Page
![Terminal Interface](img/terminal.png)
Run shell commands & real-time outputs.

### File Creator
![File Creator](img/createnewfile.png)
Create new files.

### Processing
![Processing Info](img/processing.png)
Display Information About Runing Applications in Background.


### Bulk
![Bulk](img/bulk.png)
Bulk Deletion/Copy/Zip/Unzip.



---




> 🔒 **DISCLAIMER**  
Clean&Clear Warnning This project is intended **solely for authorized penetration testing purposes**.
