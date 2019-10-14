		
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
