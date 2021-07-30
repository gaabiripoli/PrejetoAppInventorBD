<?php
    include_once 'conexao.php';

     $e-mail =  $_POST['email']; 
     $senha =  $_POST['senha'];
     $nome =  $_POST['nome'];
 
     $sql2 =  $dbcon->consulta("SELECT * FROM tblogin WHERE email='$email'");

    se(mysqli_num_rows($sql2)>0){
        ecoar "erro_email";
    }mais{
        
         $sql3 =  $dbcon->consulta("INSERIR EM tblogin(nome,e-mail,senha) VALORES ('$nome','$email','$senha')");
        se($sql3){
            ecoar "registro_ok";
        }mais{
            ecoar "registro_erro";
        }
    }