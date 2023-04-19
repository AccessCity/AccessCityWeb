<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="imagens/Logo3.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <!--CSS only-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        body{
          background-color: rgb(102, 155, 188);
        }
    </style>
</head>
<body>
    <?php
        if(isset($_POST["enviar"])){
            $usuario = $_POST["user"];
            $senha = $_POST["senha"];

            if($usuario=="admin" && $senha=="2244"){
                header("Location: https://github.com/AccessCity/AccessCityWeb");
                die;
            } else{
                echo "Acesso negado!";
            }
        }
    ?>
    
    <div class="container containerTela">
        <h2 class="text-center">Bem vindo de volta</h2>
        <div class="col-md-12"><hr></div>
        <form action="login2.php" method="post" class="container">
            <div class="col-md-12">
                <div class="row">
                    <label for="user" class="form-label">Usuário:</label>
                    <input type="text" name="user" id="" class="form-control" placeholder="ex.: Vitor Almeida" required>
                </div><br>
                <div class="row">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" name="password" id="" class="form-control" placeholder="*********" required>
                </div>
            </div><br>
            <button type="submit" name="enviar" value="enviar" class="btn btn-dark mt-2 me-auto"> Log In</button> ou 
            <a class="btn btn-danger mt-2 me-auto" role="button" href="cadastro.html">Cadastre-se!</a>
        </form>
    </div>

</body>
</html>