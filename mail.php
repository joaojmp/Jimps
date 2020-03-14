<?php

require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
require("PHPMailer/src/Exception.php");

$mail = new PHPMailer\PHPMailer\PHPMailer(true);

//Server settings
$mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;
$mail->isSMTP();
$mail->Host       = 'smtp.kinghost.net';
$mail->CharSet    = 'UTF-8';
$mail->SMTPAuth   = true;
$mail->Username   = 'jimps@jimps.com.br';
$mail->Password   = 'feD5qElMykcV';
$mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port       = 587;

//Recipients
$mail->setFrom('jimps@jimps.com.br');
$mail->addReplyTo($_POST['email']);
$mail->addAddress('jimps@jimps.com.br');

// Content
$mail->isHTML(true);
$mail->Subject  = $_POST['subject'];
$mail->Body     = '<h1>Orçamento:</h1>';
$mail->Body    .= '<hr>';
$mail->Body    .= '<strong>Nome:</strong> ' . $_POST['name'] . '.<br>';
$mail->Body    .= '<strong>E-mail:</strong> ' . $_POST['email'] . '.<br>';
$mail->Body    .= '<strong>Telefone:</strong> ' . $_POST['phone'] . '.<br>';
$mail->Body    .= '<strong>Assunto:</strong> ' . $_POST['subject'] . '.<br>';
$mail->Body    .= '<hr>';
$mail->Body    .= '<strong>Mensagem:</strong> <span style="text-align: justify">' . $_POST['message'] . '</span>.';
$mail->Body    .= '<hr>';
$mail->send();

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Enviado com Sucesso, Entraremos em contato assim que possível!!!');
    window.location.href='index.html';
    </script>");

?>