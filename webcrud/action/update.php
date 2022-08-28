<?php
// ************* update **************
require_once "../inc/connect.php";
require_once "../action/clearInput.php";

if( isset($_POST['btn-editar']) ){// botao editar
    
    // Recupera o id do registro selecionado
    $id = mysqli_escape_string($connect, $_POST['id']);

    // Preenche a tabela com os dados do registro selecionado
    $cpf = clear($_POST['cpf']);
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $sexo = clear($_POST['sexo']);
    $telefone = clear($_POST['telefone']);

    // String sql de atualização
    $sql = "UPDATE clientes SET cpf = '$cpf', nome = '$nome' , sobrenome = '$sobrenome' , email = '$email' , sexo = '$sexo'  telefone = '$telefone' WHERE id = '$id' ";

    // Executa a string
    if(mysqli_query($connect , $sql) ){// enviar edit
        echo " editado com sucesso";
        header("location: ../index.php");
    }    
}