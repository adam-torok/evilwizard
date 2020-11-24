<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];

try {
    $mail->isSMTP();               
    $mail->CharSet = 'UTF-8';
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'evilwizardmailtester@gmail.com';                     // SMTP username
    $mail->Password   = 'asd12345D';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->setFrom($email, $name);
    $mail->AddEmbeddedImage("../assets/logos/text.png", "logo", "logo.png");
    $mail->addAddress('evilwizardmailtester@gmail.com', 'RubberDuckStudio');     // Add a recipient
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'RubberDuckStudio Contacts';
    $mail->Body    = "<h1>$name</h1> just sent you a letter
                    <br><br> - email: $email,
                    <b>Here</b> is your message:
                    <br> <br>'$message' <br><br><img alt='PHPMailer' src='cid:logo'>";
    $mail->send();
    $mail->clearAddresses();              
    $mail->setFrom('evilwizardmailtester@gmail.com', "RubberDuckStudio");
    $mail->addAddress($email);
    $mail->Subject = 'Thank you for contacting us!';
    $mail->Body =  file_get_contents('to.html');
    $mail->isHTML(true);
    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>