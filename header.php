<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">

<link href="banner/css/skitter.styles.css" type="text/css" media="all" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="highslide/highslide.css">

<script language="JavaScript" src="js/jquery.js" type="text/javascript"></script>
<script language="JavaScript" src="js/jquery.validate.js" type="text/javascript"></script>

<script type="text/javascript" src="highslide/highslide-with-html.js"></script>

<script type="text/javascript" language="javascript" src="banner/js/jquery-1.6.3.min.js"></script>
<script type="text/javascript" language="javascript" src="banner/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" language="javascript" src="banner/js/jquery.skitter.min.js"></script>

<link rel="shortcut icon" type="image/png" href="estru/favicon.png">
<link rel="icon" href="estru/favicon.png" sizes="32x32">
<link rel="icon" href="estru/favicon.ico" sizes="32x32">

<title><?php echo $title ?></title>

<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('.box_skitter_large').skitter({
				theme: 'clean',
				numbers_align: 'center',
				progressbar: false, 
				numbers: false,
				dots: false, 
				animation: 'fade',
				label: false,
				preview: false
				
			});
		});
</script>

<script type="text/javascript">
    // Apply the Highslide settings
    hs.graphicsDir = 'highslide/graphics/';
    hs.outlineType = 'rounded-white';
    hs.outlineWhileAnimating = true;
</script>

 <script type="text/javascript">
		
            $(document).ready( function() {
				//alert('Seja bem Vindo');
				
                $("#formContato").validate({
                    // Define as regras
                    rules:{
                        txtNome:{
                            // será obrigatorio (required) e terá tamanho minimo (minLength)
                            required: true, minlength: 2
                        },
						txtFone:{
                            // será obrigatorio (required) e terá tamanho minimo (minLength)
                            required: true, minlength: 2
                        },
                        txtEmail:{
                            // será obrigatorio (required) e tem que ser um e-mail válido (email)
                            required: true, email: true
                        },
						txtAssunto:{
                            // será obrigatorio (required) e terá tamanho minimo (minLength)
                            required: true, minlength: 2
                        },
                        txtMensagem:{
                            // será obrigatorio (required) e terá tamanho minimo (minLength)
                            required: true, minlength: 5
                        }
                    },
                    // Mensagens de erro para cada regra
                    messages:{
                        txtNome:{
                            required: "Digite o seu nome.",
                            minlength: "O seu nome deve conter, no mínimo 2 caracteres."
                        },
						txtFone:{
                            required: "Digite o seu nome.",
                            minlength: "O seu nome deve conter, no mínimo 2 caracteres."
                        },
                        txtEmail:{
                            required: "Digite o seu e-mail para contato.",
                            email: "Digite um e-mail válido."
                        },
						txtAssunto:{
                            required: "Digite o seu nome.",
                            minlength: "O seu nome deve conter, no mínimo 2 caracteres."
                        },
                        txtMensagem:{
                            required: "Digite a sua mensagem.",
                            minlength: "A sua mensagem deve conter, no mínimo 5 caracteres."
                        }
                    }
                });
            });
        </script>

<!--[if lt IE 9]>
   <script>
      document.createElement('header');
      document.createElement('nav');
      document.createElement('section');
      document.createElement('article');
      document.createElement('aside');
      document.createElement('footer');
   </script>
<![endif]-->

<!--[if lt IE 9]>
 <style type="text/css">
 
 header, nav, section, article, aside, footer {
   display:block;
}
 
</style
<![endif]-->


</head>