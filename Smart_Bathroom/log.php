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
            <li class="nav-item active">
                <a class="nav-link" href="log.php">Log</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="users.php">Users</a>
            </li>
        </ul>
        <button class="btn btn-outline-primary my-2 my-sm-0 btn-header" type="submit"><a href="edit_user.php">Meu Utilizador</a></button>
        <button class="btn btn-outline-primary my-2 my-sm-0 btn-header" type="submit"><a href="logout.php">Logout</a></button>
    </div>
</nav>
<!--Fim Navbar-->

<!--Tabela Log-->
<div class="container load">
    <div class="row margin-top-20">
        <div class="container col-sm-12 width-98">
            <div class="card text-center" id="table">
                <div class="card-header"><span class="font-weight-bold">Log</span></div>
                <div class="card-body">
                    <table class="table table-hover text-left">
                        <thead>
                        <tr>
                            <th scope="col">Device</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Data de Atualização</th>
                            <th scope="col">Estados Alertas</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row" class="font-weight-normal">Sensor de Luz</th>
                            <td>1000</td>
                            <td>2019/03/11 14:31</td>
                            <td><span class="badge badge-success">Ativo</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="font-weight-normal">temperatura</th>
                            <td>22ºC</td>
                            <td>28/7/99</td>
                            <td><span class="badge badge-danger">Desativo</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="font-weight-normal">Humidade</th>
                            <td>85%</td>
                            <td>2019/03/11 14:31</td>
                            <td><span class="badge badge-warning">Warning</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="font-weight-normal">Bateria</th>
                            <td>20%</td>
                            <td>2019/03/11 14:31</td>
                            <td><span class="badge badge-danger">Perigo</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Fim Tabela Log-->
</body>

</html>