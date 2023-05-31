<?php
    function conectarBD(){
        $conexao = mysqli_connect("localhost", "root", "", "cadastro epicteam");
        return($conexao);
    }

    function inserirCliente($email, $nickname, $senha){
        $conexao = conectarBD();
        $consulta = "INSERT INTO cliente (email, nickname, senha)
                     VALUES ('$email','$nickname','$senha')";
        mysqli_query($conexao,$consulta);
    }
?>