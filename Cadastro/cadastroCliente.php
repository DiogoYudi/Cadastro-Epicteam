<?php
    session_start();
    require "bancodedados.php";

    if (!empty($_POST['femail']) && !empty($_POST['fnickname']) && !empty($_POST['fsenha'])){
        $email = $_POST['femail'];
        $nickname = $_POST['fnickname'];
        $senha = $_POST['fsenha'];

        inserirCliente($email, $nickname, $senha);
        header('Location:../cadastro.php');
        die(); 
    }
?>