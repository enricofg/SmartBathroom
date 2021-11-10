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
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">Bathroom <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
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

<!--Sensores-->
<div class="container load">
    <div class="row margin-top-20">

        <div class="col-sm-4">
            <div class="container">
                <div class="card text-center" id="bateria">
                    <div class="card-header"><span class="font-weight-bold">Casa de Banho #1</span></div>
                    <div class="card-body">
                        <img src="img/toilet-placeholder.jpg" class="img-container">
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline align-middle margin-bottom-0">Atualização: 2019/03/11 14:31 - </p>
                        <a href="#" class="card-link d-inline-block align-middle small">Card link</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="container">
                <div class="card text-center" id="termometro">
                    <div class="card-header"><span class="font-weight-bold">Casa de Banho #2</span></div>
                    <div class="card-body">
                        <img src="img/toilet-placeholder.jpg" class="img-container">
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline align-middle margin-bottom-0">Atualização:</p>
                        <a href="#" class="card-link d-inline-block align-middle small">Card link</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="container">
                <div class="card text-center" id="termometro">
                    <div class="card-header"><span class="font-weight-bold">Casa de Banho #2</span></div>
                    <div class="card-body">
                        <img src="img/toilet-placeholder.jpg" class="img-container">
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline align-middle margin-bottom-0">Atualização:</p>
                        <a href="#" class="card-link d-inline-block align-middle small">Card link</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--Fim Sensores-->

</body>

</html>