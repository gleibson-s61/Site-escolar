<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro_usuários</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
   <!--............. ........... Parte 1 -> Menu ............................ -->
    <nav class="dp-menu">
    
        <ul >
         
            <li><a href="index.php">Home</a></li> 

                <li><a href="">Usuario</a>
                    <ul>
                        <li><a href="login-usuario.php"> Cadastra </a> </li>  
                        <li><a href="listar_usuario.php"> Listar </a> </li>  
                        <li><a href="editar.php"> Atualizar </a></li>  
                                               
                    </ul>
                </li>
                
                <li><a href=""> Disciplina </a></li>
                        
                <li><a href=""> Curso </a></li>
                        
                <li><a href=""> Administracao </a></li>
                            
        </ul>
    </nav>
<!-- ..................................... Parte 1 -> Menu.......................... ........... -->




         <!--..........Parte 2 -> Formulário................. -->



     <div class="form-titulo">
             <h3> Crie seu cadastro</h3>
     </div>
            <div class="alt-formu">
    
                <form action="cadastro.php" method="POST">

                    <label for="">Nome :</label>
                        <input type="text" placeholder="Digite seu nome" name="nome" id="nome">

                        <label for="">Email:</label>
                            <input type="email" placeholder="Digite seu email" name="email" id="email">

                            <label for="">Endereco:</label>
                                <input type="text" placeholder="Digite seu endereco"  name="endereco" id="endereco">

                                <label for="">Telefone:</label>
                                    <input type="tel" placeholder="Digite seu telefone" name="telefone" id="telefone">


                                    
                                 <label >Sexo:</label>      

                                         <div class="btn-button">
                                                <input   type="radio" name="sexo"value="Feminino" checked> F                                            
                                                    <input  type="radio" name="sexo"value="Masculino" checked> M                      
                                          </div>
                                                 
                                          <label for="">Login:</label>
                                                <input type="text" placeholder="Digite seu login" name="login" id="login">


                                            <label for="">Senha:</label>
                                                <input type="password" placeholder="Digite sua senha" name="senha" id="senha">

                                                <div class="btn- status">
                                                <label  for="">Ativo ?</label>   

                                                <input type="checkbox" name="status" value="Ativo" checked>
                                                                                                                                                                                                                       
                                                                
                                                 </div>
                                               
                                    

                                            
                                                   
                                                <button>Enviar</button>
                                               
                                                    

                </form>

        </div>

                              <!-------------- Parte 2 -> Formulário-------------- -->

    </body>
</html>