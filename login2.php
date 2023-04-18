<?php
    if(isset($_POST["user"] && $_POST["password"])){
        $usuario = $_POST["user"];
        $senha = $_POST["password"];
    } else{
        echo "Campos usuário e/ou senha inválidos!";
        //limparCampos();
    }

    if($usuario=="admin" && $senha=="1234"){
        echo "Login efetuado com sucesso!";
    } else{
        echo "Acesso negado!";
    }
?>