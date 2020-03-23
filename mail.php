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

header( "refresh:3; url=index.php" );

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="fonts/fontawesome-free-5.12.1-web/css/all.css">
        <title>Enviando...</title>
    </head>
    <body style="background: rgba(0, 0, 0, 10%)">
        <div style="width: 100%; text-align: center; margin-top: 20%;">
            <h1>E-mail Enviado com Sucesso!!!</h1>
            <h4>
                Você será redirecionado em 3s...
            </h4>
            <i class="fas fa-spinner fa-pulse"></i>
        </div>
    </body>
</html>
