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
<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $sexo = $_POST["sexo"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $status = $_POST["status"];

    $sql = "UPDATE use_alunos SET nome='$nome', email='$email', endereco='$endereco',telefone='$telefone', sexo='$sexo', login='$login', senha='$senha', status='$status' WHERE id='$id'";

    if (mysqli_query($_conexao, $sql)) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro ao atualizar os dados: " . mysqli_error($_conexao);
    }
}

$sql = "SELECT * FROM use_alunos";
$result = mysqli_query($_conexao, $sql);
?>
     
                  <div class="titulo-atualizar">
                       <h1 >Atualização de dados cadastrais.</h1>
                   </div>

    <?php while ($rows = mysqli_fetch_array($result)) { ?>
        <div class="table-atualizar">
        <table border="1px">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
                <tr>
                    <td>Nome:</td>
                        <td><input type="text" name="nome" value="<?php echo $rows['nome']; ?>"></td>
                </tr>
                
                <tr>
                    <td>Email:</td>
                        <td><input type="text" name="email" value="<?php echo $rows['email']; ?>"></td>
                </tr>
                <tr>
                    <td>Endereço:</td>
                        <td><input type="text" name="endereco" value="<?php echo $rows['endereco']; ?>"></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                        <td><input type="text" name="telefone" value="<?php echo $rows['telefone']; ?>"></td>
                </tr>
                <tr>
                    <td>Sexo:</td>
                        <td><input  type="radio" name="sexo" value="Masculino" <?php if ($rows['sexo'] === 'masculino') echo 'checked'; ?> checked>Masculino
                        <input  type="radio" name="sexo" value="Feminino" <?php if ($rows['sexo'] === 'feminino') echo 'checked'; ?>>Feminino</td>
                </tr>
                <tr>
                    <td>Login:</td>
                        <td><input type="text" name="login" value="<?php echo $rows['login']; ?>"></td>
                </tr>
                <tr>
                    <td>Senha:</td>
                        <td><input type="text" name="senha" value="<?php echo $rows['senha']; ?>"></td>
                </tr>
                <tr>
                   <td> <label>Ativa o status ?</label>
                <input type="checkbox" name="status" value="<?php echo $rows['ativo']; ?>"></td>
                </tr>

                
                <tr class="brt-atualizar">
                    <td colspan="2"><input type="submit" value="Atualizar"></td>
                </tr>
            </form>
        </table>
        </div>
    <?php } ?>
   
</body>
</html>