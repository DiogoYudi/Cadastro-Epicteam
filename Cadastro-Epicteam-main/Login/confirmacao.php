<?php
    require "../Cadastro/bancodedados.php";
    session_start();
    $listaClientes = retornarClientes();
    $nickname = $_POST['fnickname'];
    $senha = $_POST['fsenha'];
    while($cliente = mysqli_fetch_assoc($listaClientes)){
        if ($nickname == $cliente["nickname"] && $senha == $cliente["senha"]){
            header('Location:../Login/entrou.php');
            die();
        }
    header('Location:../Login/index.php');
    die();
    }
?>