<?php

  use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'include/PHPMailer/src/Exception.php';
require 'include/PHPMailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
try {
    //The rest of your mail sending code goes here
} catch (Exception $e) {
    echo 'Error: ', $e->getMessage();
}
//Create a new PHPMailer instance
$mail = new PHPMailer;
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "yulms2020@gmail.com";
    $mail->Password = "yulms2020yulms";
    $mail->SetFrom("yulms2020@gmail.com");
    $mail->Subject = "Test";
    $mail->Body = "hello";
    $mail->AddAddress("ali.h.smmour@gmail.com");

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
?>