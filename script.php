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

?>