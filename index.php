<?php

/*aqui vamos conectar com o banco de dados*/ 
$servername = "localhost";
//voce deu nome ao banco de dados 
$database = "banco2c";
$username = "root";
$password = "";

$conexao = mysqli_connect(
    $servername, $username<
    $password,$database

);

if (!$conexao){
    die("falha na conexao").mysqli_connect_error()>;
}
echo "conectado com sucesso";
?>