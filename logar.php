<?php
    include_once 'conexao.php';

     $e-mail =  $_POST['e-mail']; //pseudo variavel $_POST
     $senha =  $_POST['senha'];

          
    executar uma pesquisa no bd 
     $sql =  $dbcon->consulta("SELECT * FROM tblogin WHERE email='$email' AND senha='$senha'");

    var_dump($sql);
    
    se(mysqli_num_rows($sql)>0){
        ecoar "login_ok";
        redirecionar para uma pagina restrita
    }mais{
        ecoar "login_erro";
    } 

?>