<?php 
$server = "localhost";
$user = "root";
$password = "root";
$database = "db_escola";

$connecta = new mysqli($server, $user, $password);
$açao = $_POST['acao'];

if ($açao == "criar")
{ 
    $sql = "create database $database";


    if($connecta->query($sql) == true){

        echo"<script>alert('banco criado'); history.back()</script>";

    }
}

if ($açao == "buscar")
{ 
    echo"<script>alert('buscando'); history.back()</script>";
}

if ($açao == "atualizando")
{ 
    echo"<script>alert('atualizado'); history.back()</script>";
}

if ($açao == "deletar")
{ 
    $sql = "delete database $database";
    if($connecta->query($sql) == true){

        echo"<script>alert('deletando banco'); history.back()</script>";

    }
  
 
}
?>