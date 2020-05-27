<?php
 error_reporting(0);

ini_set('SMTP', "tls://smtp.gmail.com");
ini_set('smtp_port', "25");
ini_set('sendmail_from', "email@domain.com");

// Recebendo dados do formulário
$name = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$assunto = $_POST['assunto'];
$subject = "Mensagem Tcc";

$headers = "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Dados que serão enviados
$corpo = "Formulário da página de contato <br>";
$corpo .= "Nome: " . $name . " <br>";
$corpo .= "Telefone: " . $celular . " <br>";
$corpo .= "Email: " . $email . " <br>";
$corpo .= "Mensagem: " . $subject . " <br>";

// Email que receberá a mensagem (Não se esqueça de substituir)
$email_to = 'lucasm15716@gmail.com';

// Enviando email
$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $corpo, $headers);

if ($status):
  // Enviada com sucesso
  header("Refresh: 0; url = ../paginas/index.php");
  echo"<script>alert('Dados Enviados !!')</script>";
else:
  // Se der erro
  header("Refresh: 0; url = ../paginas/index.php");
  echo"<script>alert('Ops, Ocorreu um erro tente novamente !')</script>";
endif;
?>