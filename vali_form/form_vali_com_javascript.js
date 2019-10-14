// JavaScript Document

function validacao() {
	
	if(document.form.txtNome.value=="") {
		alert("Preencha o campo nome!")
		document.form.txtNome.focus();
		return false;
	}
		
	if(document.form.txtEmail.value=="" || document.form.txtEmail.value.indexOf('@')==-1 || document.form.txtEmail.value.indexOf('.')==-1) {
		alert("Email Inválido!")
		document.form.txtEmail.focus();
		return false;
	}
	
	if(document.form.txtAssunto.value=="") {
		alert("Preencha o campo assunto!")
		document.form.txtAssunto.focus();
		return false;
	}
	
	if(document.form.txtMensagem.value=="") {
		alert("Preencha o campo Mensagem!")
		document.form.txtMensagem.focus();
		return false;
	}
}