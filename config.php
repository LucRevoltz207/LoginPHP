<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '1234';
$dbName = 'Login';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//
if($conexao->connect_errno)
{
    echo "Erro";
}
else
{
    echo "Conexão efetuada com sucesso";
}
?>