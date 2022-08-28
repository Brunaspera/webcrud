<?php

require_once "../inc/connect.php"; 
require_once "../action/clearInput.php";

// Recupera o identificador do registro e trata a string
$id = mysqli_escape_string($connect, $_POST['id']);
$sql = "DELETE FROM clientes WHERE id = '$id' ";

// Executa a string de deleção do registro selecionado
if(mysqli_query($connect,$sql) ){
    
    header("location: ../index.php");
}