<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 650px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #004080;
    }

    p {
        line-height: 1.6;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
    }

    .footer {
        margin-top: 20px;
        text-align: center;
        color: #777;
    }
    .footer a {
        text-decoration: none;
        color: #0e87ff;
    }
    .footer a:hover {
        text-decoration: none;
        color: #004080;
    }
</style>

<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include PHPMailer
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Capture POST data
$data = $_POST;

// Database connection
$servername = "localhost";
$username = "hypervoi_application_form_fham";
$password = "HpvQlpoiR)mp";
$database = "hypervoi_fham_db";
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Capture input values
$value1 = $data['title'];
$value2 = $data['firstName'];
$value3 = $data['lastName'];
$value4 = $data['conExt'];
$value5 = $data['conNum'];
$value6 = $data['comapanyName'];
$value7 = $data['jobTitle'];
$value8 = $data['email'];
$value9 = $data['country'];
$value10 = $data['remark'];

// Prepare SQL query
$sql = "INSERT INTO fham_exhibitor_registration (contact_per_title, first_name, last_name, mobile_ext, mobile_number, comapany_name, job_title, email, country, remark)
        VALUES ('$value1', '$value2', '$value3', '$value4', '$value5', '$value6', '$value7', '$value8', '$value9', '$value10')";

// Execute SQL query and send email if successful
if ($conn->query($sql) === TRUE) {
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'mail.fhamaldives.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'webform@fhamaldives.com';
        $mail->Password = 'd*7L%b1%u5Ma';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('mkt@fhamaldives.com', 'FHAM 2024');
        $mail->addAddress($data['email'], $data['firstName']);
        $mail->addCC('mkt@fhamaldives.com', 'FHAM 2024');
        $mail->addCC('rizwan@cdcevents.net', 'Rizwan Khan');
        //$mail->addCC('gayanchathuranga1992@gmail.com', 'Test');
        //$mail->addCC('ameshdilshanmadusanka@gmail.com', 'Test');
        $mail->addBCC('ameshm@aitech.lk', 'FHAM 2024');
        $mail->addBCC('gayanc@aitech.lk', 'FHAM 2024');

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'FHAM 2024 - EXHIBITOR REGISTRATION - ' . $data['firstName'] . ' ' . $data['lastName'];
        $emailBody = '<!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>FHAM 2024 - Registration Success</title>
            <style>
            /* Reset styles */
            body, html {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                line-height: 1.6;
            }

            /* Container styles */
            .container {
                max-width: 650px;
                margin: 0 auto;
                padding: 20px;
                background-color: #f9f9f9;
                border: 1px solid #ddd;
                border-radius: 10px;
            }

            /* Heading styles */
            h2 {
                color: #004080;
            }

            /* Paragraph styles */
            p {
                color: #555;
                font-size: 16px;
            }

            .footer {
                margin-top: 20px;
                text-align: center;
                color: #777;
            }
            .footer a {
                text-decoration: none;
                color: #0e87ff;
            }

            /* Responsive styles */
            @media screen and (max-width: 600px) {
                .container {
                width: 100%;
                }
            }
            </style>
            </head>
            <body>
            <div class="container">
                <img src="https://fhamaldives.com/fham-exhibitor-application/img/FHAM.png" width: 300px; alt="FHAM 2024">
                <h2>FHAM 2024 - Registration Completed Successfully</h2>
                <p>Dear <b>' . $data['firstName'] . ' ' . $data['lastName'] . ',</b></p>
                <p><b>Your registered email id is : '  . $data['email'] . '</b></p>
                <p><b>Remark :</b> '  . $data['remark'] . '</p>
                <p>Thank you for registering! Your registration has been successfully processed.</p>
                <p>Please keep this information for your records. If you have any questions or need further assistance, feel free to contact our support team at <b>mkt@fhamaldives.com</b>.</p>
                <p class="footer">
                    Best Regards,<br>
                    FHAM 2024<br>
                    C/O MJ & S, Galholhu Aage, Majeedhee Magu, Malé 20119,Maldives.<br>
                    00960 779 2241<br>
                    0094 768 255 584<br>
                    0094 773 959 835<br>
                    <a href="https://www.fhamaldives.com/">www.fhamaldives.com</a><br>
                </p>
            </div>
            </body>
            </html>
            ';
        $mail->Body = $emailBody;

        // Send email
        $mail->send();
        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    ?>
    <title>FHAM 2024</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <div class="container">
        <h2>Registration Success</h2>
        <p>Dear <?php echo $value1 . ' ' . $value2 . ' ' . $value3; ?>,</p>
        <p>Thank you for registering! Your registration has been successfully processed.</p>
        <p>Please keep this information for your records. If you have any questions or need further assistance, feel free to contact our support team at <b>mkt@fhamaldives.com</b>.</p>
        <p class="footer">
            Best Regards,<br>
            FHAM 2024<br>
            C/O MJ & S, Galholhu Aage, Majeedhee Magu, Malé 20119,Maldives.<br>
            00960 779 2241<br>
            0094 768 255 584<br>
            0094 773 959 835<br>
            <a href="https://www.fhamaldives.com/">www.fhamaldives.com</a><br>
        </p>
    </div>
    <?php
} else {
    ?>
    <div class="container">
        <h2>Registration Fail</h2>
        <p>Oops! Something went wrong during registration. Please try again later.<br/>
        <div style="background: #0c0c0c; color: #FFFFFF; padding: 10px; font-family: monospace;">
            <?php echo $conn->error; ?>
        </div>
        </p>
        <p class="footer">
            Best Regards,<br>
            FHAM 2024<br>
            C/O MJ & S, Galholhu Aage, Majeedhee Magu, Malé 20119,Maldives.<br>
            00960 779 2241<br>
            0094 768 255 584<br>
            0094 773 959 835<br>
            <a href="https://www.fhamaldives.com/">www.fhamaldives.com</a><br>
        </p>
    </div>
    <?php

}
