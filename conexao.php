<?php
     $host = "localhost";
     $usuario = "raiz";
    $senha = "";
     $banco = "bdlogin";
     $dbcon = novo MySQLi("$host","$usuario","$senha","$banco");

    se($dbcon->connect_error){
        ecoar "conexao_erro";
    } /* else{
 ecoar "conexao_ok";
    }  */

   ?>