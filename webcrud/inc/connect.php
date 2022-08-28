<?php
// Definição das variáveis para conexão ao banco
$server = "localhost";
$user = "root";
$password = "";
$database = "agenda";

// Função que invoca a conexão
$connect = mysqli_connect($server,$user,$password,$database);

// Caso ocorra erro na conexão, informa o tipo
if( mysqli_connect_error() ){
    echo "erro na conexao: ".mysqli_connect_error();
}