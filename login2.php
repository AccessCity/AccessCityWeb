<?php
    if(empty($_POST["user"] && $_POST["password"])){
        echo "Campos usuário e/ou senha inválidos!";
        //limparCampos();
    } else{
        $usuario = $_POST["user"];
        $senha = $_POST["password"];
    }

    if($usuario=="admin" && $senha=="2244"){
        echo "Login efetuado com sucesso!";
        header("Location: https://github.com/AccessCity/AccessCityWeb");
        die;
    } else{
        echo "Acesso negado!";
    }
?>