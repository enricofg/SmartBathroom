<!DOCTYPE html>
<?php
session_start();
?>

<html lang="pt-PT">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Plataforma IoT</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--CSS próprio-->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<div class="container">
    <?php
    $username = "user1";
    $password = "password1";
    ?>
    <form method="post">

        <a href=""><img src="img/placeholder.png" class="img-container"></a>
        <label for="user" class="d-block margin-top-20">
            Username:
        </label>
        <input id="user" name="username" type="text" placeholder="Escreva o username" class="form-control">

        <label for="psswd" class="d-block margin-top-20">
            Password:
        </label>
        <input id="psswd" name="password" type="password" placeholder="Escreva a password" class="form-control">

        <input id="submeter" type="submit" value="Submeter" class="btn btn-outline-primary d-block margin-top-20">
    </form>
    <div class="container margin-top-20">
        <?php
        if(isset($_POST['username']) && isset($_POST['password'])) {
            if (($_POST['username']) == $username && ($_POST['password']) == $password) {
                $_SESSION['username']=($_POST['username']);
                header('Location: dashboard.php');
                //echo "Correto";
            } else {
                echo "<span class='text-danger'>Credenciais incorretas</span><br>";
            }
        }
        ?>
    </div>
</div>


<!--Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<!---->
</body>
</html>