<?php

   define("host","127.0.0.1");
   define("usuario","root");
   define("senha","");
   define("db","alunos_escolar");

  $_conexao = mysqli_connect(host,usuario,senha,db) or die (mysqli_error($_conexao));




?>