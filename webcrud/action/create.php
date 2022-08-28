<?php

// ******** create ***********
include_once "../inc/connect.php";
session_start(); // Inicia uma sessão de dados

// Requisita a função para tratar o escape de strings
require_once "../action/clearInput.php";

if( isset($_POST['btn-cadastro']) == true ){// botao cadastrar clicado
    
    // Recebe os dados via POST e trata o escape de strings
    $cpf = clear($_POST['cpf']);
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $sexo = clear($_POST['sexo']);
    $telefone = clear($_POST['telefone']);

    // Verifica se as variáveis estão vazias
    if( empty($_POST['cpf'])|| empty($_POST['nome']) || empty($_POST['sobrenome']) || empty($_POST['email']) || empty($_POST['sexo']) || empty($_POST['telefone'])){// campo vazio 
        echo " erro ao cadastrar ";
    } else {
        // String de inserção de registros
        $sql = "INSERT INTO pessoa (cpf,nome,sobrenome,email,sexo,telefone) VALUES ('$cpf','$nome','$sobrenome','$email','$sexo','$telefone')" ;
        echo $sql;
    }
        if( mysqli_query($connect, $sql)){// inserindo no banco
            echo " inserido com sucesso";
            header("location: ../index.php");
        } else {
            header("location: ../index.php");
        }
    }
