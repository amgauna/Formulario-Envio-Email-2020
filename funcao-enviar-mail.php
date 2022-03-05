<!--  Enviar e-mails com a função mail() do PHP 
      Veremos neste artigo como realizar envios de e-mail através da função mail() 
      do PHP, acompanhe os detalhes abaixo:  -->

<!--  Função para Envio de Mensagens mail
      A função mail() possui algumas particularidades relacionadas ao cabeçalho da
      mensagem por isso recomendamos que o cabeçalho siga o padrão abaixo:  -->

<!--  A quebra de linha para utilizar no cabeçalho deve ser “\r\n”  -->

<?php
// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
$headers .= "From: eu@seudominio.com\r\n"; // remetente
$headers .= "Return-Path: eu@seudominio.com\r\n"; // return-path
$envio = mail("destinatario@algum-email.com", "Assunto", "Texto", $headers);
 
if($envio)
 echo "Mensagem enviada com sucesso";
else
 echo "A mensagem não pode ser enviada";
?>
