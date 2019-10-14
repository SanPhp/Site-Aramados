<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script language="JavaScript" src="vali_form/form_vali_com_javascript.js" type="text/javascript"></script>

<link rel="shortcut icon" type="image/png" href="estru/favicon.png">
<link rel="icon" href="estru/favicon.png" sizes="32x32">
<link rel="icon" href="estru/favicon.ico" sizes="32x32">

<title>Contato -  KS Manuntenção - Tudo de Manutenção para sua empresa!</title>

</head>

<body>
	<?php $menuContato = 'active'; ?>
    
    <section id="header_envolve">
    
	<?php require 'cabecalho.php'; ?>
    
    </section><!--header_envolve-->
    
    <section id="all">
    
    	<section id="contato">
        
    	<h2>Contato</h2>
        
        <p>Estamos sempre prontos para ouvir você e esclarecer as suas dúvidas, 
           tanto pelo telefone como por e-mail.</p>
       
	 
         <div class="form_contato">
               
         
    <form action="contato_ok.php" name="form" method="post" onSubmit="return validacao();">

                	
    <input type="text" id="nome" name="txtNome" placeholder="Nome">
                   
   <input type="text" id="fone" name="txtFone" placeholder="Fone">
                    
     <input type="text" id="email" name="txtEmail" placeholder="E-mail">
                    
    <input type="text" id="assunto" name="txtAssunto" placeholder="Assunto">
                    
      <textarea id="mensagem" name="txtMensagem" placeholder="Mensagem"></textarea>
                    
    <input type="image" src="estru/btn_form.png" id="submit" name="submit" value="Enviar">
     
            </form>
       
            	<h3>Localização</h3>
            
            <div class="localizacao">
            
            	<article class="end_fone_contato">
                
                	<h4>Fone</h4>
                    <span>(43) 9698-5968</span>
                    <span>(43) 9987-6519</span>
                    <span>(43) 3152-1938</span>
                    <span>(43) 3276-5689</span>
                    <h4>comercial@ksmanutencao.com.br</h4>
                    <span>ARAPONGAS - PARANÁ</span>
                
                </article><!--end_fone_contato-->
                
                <div class="mapa">
                
                <iframe width="366" height="130" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Av.+Arapongas,+Arapongas+-+Paran%C3%A1&amp;aq=0&amp;oq=av+arapongas&amp;sll=-24.614808,-51.321488&amp;sspn=6.080559,7.064209&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+Arapongas,+Arapongas+-+Paran%C3%A1,+86701-000&amp;t=m&amp;ll=-23.409224,-51.438718&amp;spn=0.00256,0.007854&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Av.+Arapongas,+Arapongas+-+Paran%C3%A1&amp;aq=0&amp;oq=av+arapongas&amp;sll=-24.614808,-51.321488&amp;sspn=6.080559,7.064209&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+Arapongas,+Arapongas+-+Paran%C3%A1,+86701-000&amp;t=m&amp;ll=-23.409224,-51.438718&amp;spn=0.00256,0.007854&amp;z=16&amp;iwloc=A" style="color:#0000FF;text-align:left"></a></small>
                </div><!--mapa-->
                
                
            </div><!--localizacao-->
            
            
         </div><!--form_contato-->
           
     
    </section><!--contato-->
    
    </section><!--/all-->
    
   <?php require 'footer.php'; ?>

</body>
</html>