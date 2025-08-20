<?php 
$server = "localhost";
$user = "root";
$password = "root";
$database = "db_escola";

$connecta = new mysqli($server, $user, $password);
$açao = $_POST['acao'];

if ($connecta == true) {
    echo"<script>alert('CONECTADO'); history.back()</script>";
}

if ($açao == "criar")
{ 
    $sql = "CREATE TABLE tb_escola(id_aluno int auto_increment primary key,
    nm_aluno varchar(45),
    idade int)";
    sleep(3);
  $connecta->query($sql);
    $insert = "INSERT INTO  tb_escola(NULL,'Miguel Perassoli',16)";
    sleep(3);
    $connecta->query($insert);
    echo "$insert";
}

if ($açao == "buscar")
{  $buscar = "SELECT * FROM tb_escola"; 
    sleep(3);
    echo"<script>alert('buscando'); history.back()</script>";
    echo "$buscar";
}

if ($açao == "atualizando")
{ $atualizar = "UPDATE FROM tb_escola SET nm_aluno='Joelma' WHERE id ='1'";
    sleep(3);
    echo"<script>alert('atualizado'); history.back()</script>";
    echo "$atualizar";
}

if ($açao == "deletar")
{
$deletar ="DELETE FROM tb_escola";
sleep(3);
echo"<script>alert('DELETADO'); history.back()</script>";
echo "$deletar";
} 
 

?>