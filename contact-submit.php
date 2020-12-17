<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library files
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if (!empty($_POST['name'])){
    if (!empty($_FILES["attachment"]["name"])){
        //$uploadDir = "uploads/";
        $uploadDir = "../tmp/uploads/";
        $fileName = basename($_FILES["attachment"]["name"]);
        $filePath = $uploadDir . $fileName;
        $fileInfo = explode('.', $filePath);
        if(end($fileInfo) == 'pdf' || end($fileInfo) == 'doc' || end($fileInfo) == 'docx'){
            if(move_uploaded_file($_FILES["attachment"]["tmp_name"], $filePath)){
                $uploadedFile = $filePath;
            } else {
                $uploadedFile = '';
            }
            
        } else {
            $statusMessage = 'Sadece PDF ve WORD dosyası yükleyebilirsiniz!';
            return;
        }
    }
    $mail = new PHPMailer;

    // SMTP configuration
    $mail->isSMTP();
    $mail->Host     = 'sxb1plzcpnl437837.prod.sxb1.secureserver.net';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@cinargeoteknik.com';
    $mail->Password = 'ahad8522387';
    $mail->SMTPSecure = 'ssl';
    $mail->Port     = 465;

    $mail->setFrom('info@cinargeoteknik.com', $_POST['name']);
    // $mail->setFrom('pegi.arch@gmail.com', $_POST['name']);

    // Add a recipient
    // $mail->addAddress('ahad.bahari@gmail.com');
    $mail->addAddress('b.naderalvojoud@gmail.com');
    $mail->isHTML(true);

    // Email subject
    if($_POST["contact-type"]=='kariyer'){
        $mail->Subject = 'Web Siteden Gelen Kariyer Formu'; 
        $mailBody = "
        <h4>Gönderilen Mesaj:</h4>
        <p>{$_POST['message']}</p>
        <br>
        <h4>Kişisel Bilgiler:</h4>
        <p> Ad: {$_POST['name']}</p>
        <p> e-posta: {$_POST['email']}</p>
        <p> tel: {$_POST['tel']}</p>    
        ";  
        if (!empty($uploadedFile)){
            $mail->AddAttachment($uploadedFile);
        }
    } else {
        $mail->Subject = 'Web Siteden Gelen Proje Formu';
        $mailBody = "
        <h4>Gönderilen Mesaj:</h4>
        <p>{$_POST['message']}</p>
        <br>
        <h4>Kişisel Bilgiler:</h4>
        <p> Firma: {$_POST['company']}</p>
        <p> Ad: {$_POST['name']}</p>
        <p> e-posta: {$_POST['email']}</p>
        <p> tel: {$_POST['tel']}</p>    
        ";
    }  

    $mail->Body = $mailBody;
    
    // Send email
    if(!$mail->send()){
        header("Location: fail.html");       
    }else{
        header("Location: success.html");
    }
} else {
    header("Location: ".$_POST["contact-type"].".html");
}
?>
