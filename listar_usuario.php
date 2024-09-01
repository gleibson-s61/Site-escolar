<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista_Usuários</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

 <!--............. ........... Parte 1 -> Menu............................ -->
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

  
      <div class="titulo">
           <h1>Seja bem vindos </h1>
      </div>


      <div class="tabela">
                    <table  border ="1px">
                        
                            <tr class="menu-id" >  
                                        <th >Id</th>
                                        <th width="120px">Nome</th>
                                        <th width="120px">Email</th>
                                        <th width="120px">Endereco</th>
                                        <th width="120px">Telefone</th>
                                        <th width="120px">Sexo</th>
                                        <th width="120px">Login</th>
                                        <th width="120px">Senha</th>
                                        <th width="120px">Status</th> 
                                        <th  width="200px">Alterações</th>
                                        
                                        
                            </tr>
                    

                    <?php
                    
                    include("conexao.php");
                        
                    $_query = "SELECT id,nome,email,endereco,telefone,sexo,login,senha,status FROM use_alunos";
                    $_dados = mysqli_query($_conexao,$_query);

                    if($_dados){
                        while($rows = mysqli_fetch_assoc($_dados)){
                          ?>

                

                    <tr>

                            <td><?php echo($rows['id']); ?></td>
                            <td width="120px" ><?php echo($rows['nome']); ?></td>
                            <td width="120px"><?php echo($rows['email']); ?></td>
                            <td width="120px"><?php echo($rows['endereco']); ?></td>
                            <td width="120px"><?php echo($rows['telefone']); ?></td>
                            <td width="120px"><?php echo($rows['sexo']); ?></td>
                            <td width="120px"><?php echo($rows['login']); ?></td>
                            <td width="120px"><?php echo($rows['senha']); ?></td>
                            
                            
                            <td>
                                 <?php
                                    if($rows['status'] = 'ativo')
                                    {
                                        echo "ativo"
                                        ?>
                                     
                                         
                                      <?php
                                    }else{

                                         echo" desativado"

                                      ?>
                                      
                                     <?php

                                    }                                                                       
                                 
                                 ?>

                            </td>
                                  
                               
                                  <td  width="120px"><a  href="editar.php"> Editar</a></td>
                               
                                
                               

                            
                    </tr>
                    <?php  }
                    }
                ?>
                   
                           

                    </table>
       </div>
    



</body>
</html>