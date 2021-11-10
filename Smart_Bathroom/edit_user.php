<!DOCTYPE html>
<?php
session_start();
/*if (!isset($_SESSION['username'])){
    header("refresh:5;url=index.php");
    die("Acesso restrito.");
}*/

//$path='';

?>

<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bathroom Experience</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--CSS próprio-->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">Bathroom <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="log.php">Log</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="users.php">Users</a>
            </li>
        </ul>
        <button class="btn btn-outline-primary-active my-2 my-sm-0 btn-header" type="submit"><a href="edit_user.php">Meu Utilizador</a></button>
        <button class="btn btn-outline-primary my-2 my-sm-0 btn-header" type="submit"><a href="logout.php">Logout</a></button>
    </div>
</nav>
<!--Fim Navbar-->

<!--Form Utilizadores-->
<div class="container load editar-dados">
    <form method="post">
        <label for="user" class="d-block margin-top-20">
            Nome
        </label>
        <input id="user" name="name" type="text" placeholder="Escreva o nome" class="form-control">

        <label for="psswd" class="d-block margin-top-20">
            Password
        </label>
        <input id="psswd" name="password" type="password" placeholder="Escreva a password" class="form-control">

        <label for="psswd" class="d-block margin-top-20">
            Confirme a Password
        </label>
        <input id="psswd" name="password" type="password" placeholder="Confirme a password" class="form-control">

        <div class="margin-top-20 alert alert-danger" role="alert">
            Passwords não são iguais
        </div>

        <div class="input-group">
            <span class="input-group-btn">
                <input id="submeter" type="submit" value="Concluir" class="btn btn-outline-success d-block d-inline-block">
            </span>
        </div>

<!--        <input id="cancelar" type="cancel" value="Cancelar" class="btn btn-outline-warning d-block margin-top-20 d-inline-block">-->

    </form>


</div>
<!--Fim Form Utilizadores-->
</body>

</html>