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
            <li class="nav-item active">
                <a class="nav-link" href="users.php">Users</a>
            </li>
        </ul>
        <button class="btn btn-outline-primary my-2 my-sm-0 btn-header" type="submit"><a href="edit_user.php">Meu Utilizador</a></button>
        <button class="btn btn-outline-primary my-2 my-sm-0 btn-header" type="submit"><a href="logout.php">Logout</a></button>
    </div>
</nav>
<!--Fim Navbar-->

<!--Tabela Users-->
<div class="container load">
    <div class="row margin-top-20">
        <div class="container col-sm-12 width-98">
            <div class="card text-center" id="table">
                <div class="card-header"><span class="font-weight-bold">Users</span></div>
                <div class="card-body">
                    <table class="table table-hover text-left users">
                        <thead>
                        <tr>
                            <th scope="col">Login</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Tipo de Usuário</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row" class="font-weight-normal">user1</th>
                            <th scope="row" class="font-weight-normal">Usuário 1</th>
                            <td>Usuário</td>
                            <td class="btn-edit"><button class="btn btn-outline-secondary" type="submit"><a class="" href="#">Editar</a></button></td>
                        </tr>
                        <tr>
                            <th scope="row" class="font-weight-normal">seguranca1</th>
                            <th scope="row" class="font-weight-normal">Segurança 1</th>
                            <td>Segurança</td>
                            <td class="btn-edit"><button class="btn btn-outline-secondary" type="submit"><a class="" href="#">Editar</a></button></td>
                        </tr>
                        <tr>
                            <th scope="row" class="font-weight-normal">limpeza1</th>
                            <th scope="row" class="font-weight-normal">Limpeza 1</th>
                            <td>Limpeza</td>
                            <td class="btn-edit"><button class="btn btn-outline-secondary" type="submit"><a class="" href="#">Editar</a></button></td>
                        </tr>
                        <tr>
                            <th scope="row" class="font-weight-normal">admin1</th>
                            <th scope="row" class="font-weight-normal">Administrador 1</th>
                            <td>Administrador</td>
                            <td class="btn-edit"><button class="btn btn-outline-secondary" type="submit"><a class="" href="#">Editar</a></button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Fim Tabela Users-->
</body>

</html>