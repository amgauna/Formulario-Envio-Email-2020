<?php
require 'PHPMailerAutoload.php';
require 'class.phpmailer.php';

$mailer = new PHPMailer;

//$mailer->SMTPDebug = 2; // Enable verbose debug output

$mailer->isSMTP(); // Set mailer to use SMTP

$mailer->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);


if($_GET['acao'] == 'enviar'){
$nome          = $_POST['nome'];
$assunto   = $_POST['assunto'];
$mensagem  = $_POST['mensagem'];
$arquivo   = $_FILES["arquivo"];


$mailer->Host = 'mail.seuDominio.com.br';
$mailer->SMTPAuth = true;     // Enable SMTP authentication
$mailer->IsSMTP();
$mailer->isHTML(true);       // Set email format to HTML
$mailer->Port = 587;

// Ativar condição utf-8, para acentuação
$mailer->CharSet = 'UTF-8';

$mailer->Username = 'conta@SeuDomínio.com.br'; // SMTP username
$mailer->Password = 'SuaSenha';    // SMTP password
// email do destinatario
$address = "conta@SeuDomínio.com.br";

//$mailer->SMTPDebug = 1;
$corpoMSG = "<strong>Nome:</strong> $nome<br> <strong>Mensagem:</strong> $mensagem";

$mailer->AddAddress($address, "destinatario");
$mailer->AddAddress("conta@gmail.com", "destinatario 2"); // 2º destinatário se querer enviar, se não, comente com //
$mailer->From = 'conta@SeuDomínio.com.br';
$mailer->Sender = 'conta@SeuDomínio.com.br';
$mailer->FromName = "Teste LW"; // Seu nome
// assunto da mensagem
$mailer->Subject = $assunto;
// corpo da mensagem
$mailer->MsgHTML($corpoMSG);
// anexar arquivo
$mailer->AddAttachment($arquivo['tmp_name'], $arquivo['name']  );

if(!$mailer->Send()) {
   echo "Erro: " . $mailer->ErrorInfo;
  } else {
   echo "Mensagem enviada com sucesso!";
  }
}

?>
