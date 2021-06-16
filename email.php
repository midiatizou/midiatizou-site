<?php
header('AMP-Access-Control-Allow-Source-Origin: https://midiatizou.com.br');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "contato@midiatizou.com.br";
  $subject = "Formulario Home";
  $body = "Nome".$name."\n"."Email".$email."\n"."Mensagem".$message;

  $header = "From:".$email."\n"."Replay-To:".$email."\n"."X=Mailer:PHP/".phpversion();

@mail($to, $subject, $body, $header)

?>