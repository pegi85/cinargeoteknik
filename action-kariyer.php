<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library files
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer;

// SMTP configuration
$mail->isSMTP();
$mail->Host     = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'pegi.arch@gmail.com';
$mail->Password = '83338610';
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;

$mail->setFrom('pegi.arch@gmail.com', $_POST['name']);

// Add a recipient
$mail->addAddress('b.naderalvojoud@gmail.com');

// Email subject
$mail->Subject = 'Web Siteden Gelen Kariyer Formu';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = $_POST['message'];
$mail->Body = $mailContent;

// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Message has been sent';
}

?>
