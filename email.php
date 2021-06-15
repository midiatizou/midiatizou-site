<?php
  
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "contato@midiatizou.com.br";
$subject = "Formulario Home";
$body = "Nome".$name."\n"."Email".$email."\n"."Mensagem".$message;

ob_clean();

$header = "From:".$email."\n"."Replay-To:".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($to, $subject, $body, $header)) {
  header("Location: https://midiatizou.com.br/obrigado/");
} else {
  echo("Email não pode ser enviado!");
}

?>