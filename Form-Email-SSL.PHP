
<!DOCTYPE HTML>

<html lang="pt-BR"> 

<head> 

<meta charset="UTF-8"> 

<title>Formulário FormMail</title> 

<meta property="og:title" content="Teste de Envio via FormMail" /> 

<meta property="og:locale" content="pt_br" /> 

</head> 

<body> 

<!-- PARA REVENDA PLESK e CPANEL UTILIZE O ENDEREÇO ABAIXO: --> 

<form method="post" action="http://scripts.hospedagemdesites.ws/scripts/formmail.pl"/> 

<!-- PARA HOSPEDAGEM COMPARTILHADA, DESCOMENTE A LINHA ABAIXO: --> 

<!-- <form method="post" action="http://www18.locaweb.com.br/scripts/FormMail.pl"/> --> 

<!-- Abaixo, informe uma conta de email do domínio da hospedagem (email@domínio.com.br) --> 

<input type="hidden" name="email" value="email@dominio.com.br"/> 

<!-- Informe a conta de emails que receberá os dados do formulário nele preenchido. --> 

<!-- Dica: Para adicionar outro recipiente do formulário, separe as contas de email por virgula --> 

<!--Ex.: value="email@dominio.com.br, podeseroutroemail@outrodomínio.com.br" --> 

<input type="hidden" name="recipient" value="email@dominio.com.br"/> 

<!-- Abaixo, informe o qual o assunto padrão da mensagem --> 

<input type="hidden" name="subject" value="FormMail Teste Locaweb"/> 

<!-- Nesta tag, informe o redirecionamento desejado --> 
<!--página principal do site, mensagem de agradecimento, etc --> 

<input type="hidden" name="redirect" value="http://seudominio.com/obrigado.html"/> 

<table width="28%" border="1"> 
<tr> <td height="19" width="25%">
Nome: </td> 
<td height="19" width="75%">
<input type="text" name="nome" size="40" value="">
</td>
</tr> <tr> <td height="19" width="25%">E-mail: </td> 
<td height="19" width="75%">
<input type="text" name="replyto" size="40" value=""></td>

<!-- Este parametro ( name="replyto" ) recebe o email que você responderá posteriormente "Responder Para" --> 
</tr> <tr> 
<td height="19" width="25%">Mensagem: </td> 
<td height="19" width="75%">
<textarea name="mensagem"></textarea></td>
</tr> <tr> 
<td height="19" width="25%">&nbsp; </td>

<td height="19" width="75%"> 
<input type="submit" name="Submit" value="Enviar Dados"> </td> 
</tr> 
</table> 
</form> 
</body> 
</html>
