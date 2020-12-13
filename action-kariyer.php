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
$mail->Username = 'cinargeoteknik@gmail.com';
$mail->Password = 'ahad3131546';
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;

$mail->setFrom('cinargeoteknik@gmail.com', $_POST['name']);

// Add a recipient
$mail->addAddress('pegi.arch@gmail.com');

// Email subject
$mail->Subject = 'Web Siteden Gelen Kariyer Formu';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = $_POST['message'];
$mailContent = "
    <h4>Gönderilen Mesaj:</h4>
    <p>{$mailContent}</p>
    <br>
    <h4>Kişisel Bilgiler:</h4>
    <p> Ad: {$_POST['name']}</p>
    <p> e-posta: {$_POST['email']}</p>
    <p> tel: {$_POST['tel']}</p>    
    ";

$mail->Body = $mailContent;

// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    header("Location: kariyer.html");
}

?>
