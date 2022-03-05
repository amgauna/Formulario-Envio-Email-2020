<% 
DIM Mail 
Set Mail = Server.CreateObject("Persits.MailSender") 
Mail.IsHTML = True 
Mail.Host = "smtp.seudominio.com.br" 
Mail.Username = "seuemail@seudominio.com.br" 
Mail.Password = "senhadoseuemail" 
Mail.AddReplyTo  Request.Form("fromemail") , Request.Form("fromnome")
Mail.From = Request.Form("fromemail") 
Mail.FromName = Request.Form("fromnome") 
Mail.AddAddress "seuemail@seudominio.com.br" 
Mail.Subject = Request.Form("assunto") 
Mail.Body = Request.Form("mensagem") 
On Error Resume Next 
Mail.Send 
If Err <> 0 Then 
   Response.Write "<h3>Ocorreu um erro: " & Err.Description & "</h3>" 
End If 
If Err = 0 Then 
   Response.Write("<h3>Obrigado Sr(a) " & Request.Form("fromnome") & ", seu e-mail foi enviado com sucesso!</h3>") 
End If 
Set Mail = Nothing 
%>
