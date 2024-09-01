



<?php

    include("conexao.php");

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $endereco = $_POST["endereco"];
        $telefone = $_POST["telefone"];
        $sexo = $_POST["sexo"];
        $login=$_POST["login"];
        $senha = $_POST["senha"];
        $status = $_POST["status"];
        

    $sql=
           "insert into use_alunos (id,nome,email,endereco,telefone,sexo,login,senha,status)
        value
             ('','$nome','$email','$endereco','$telefone','$sexo','$login','$senha','$status');";
             
            mysqli_query($_conexao,$sql) or die(mysqli_error($_conexao));

      echo("<b>Cadastro realizado com sucesso!");
     header("refresh: 3;url=login-usuario.php");

?>