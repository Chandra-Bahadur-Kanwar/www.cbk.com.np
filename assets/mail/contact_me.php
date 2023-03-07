<?php
use PHPmailer\PHPmailer\PHPmailer;
use PHPmailer\PHPmailer\Exception;

require 'phpmailer/src/Expection.php'
require 'phpmailer/src/PHPmailer.php'
require 'phpmailer/srcSMPT.php'

if(isset)($_post["send"]){
  $mail = new PHPMailer(ture);
  $mail->isSMPT();
  $mail->Host = 'smpt.gmail.com';
  $mail->SMPTAuth = ture;
  $mail->Username = 'chandrabdr.kanwar@gmail.com';
  $mail->Password = 'umzxihebiyfnzlyq';
  $mail->SMPTSecure = "ssl";
  $mail->port = 465;

  $mail->setFrom (chandrabdr.kanwar@gmail.com);

  $mail->addAddress($_post);
  $mail->isHTML (true);
  $mail->Subject = $_post ["subject"];
  $mail->Body = $_post ["message"];
  $mail->send ();
?>
