<?php
  
$name = addcslashes($_POST[name]);
$email = addcslashes($_POST[email]);
$message = addcslashes($_POST[message]);

$to = "contato@midiatizou.com.br";
$subject = "Formulario contato";
$body = "Nome".$name. "\r\n"."Email".$email."\r\n"."Mensagem".$message;

ob_clean();

$header = "From:".$email."\r\n"."Replay-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

if(mail($to, $subject, $body, $header)) {
  echo("Email enviado com sucesso...");
} else {
  echo("Email não pode ser enviado!");
}

?>