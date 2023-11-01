<?php
session_start();
require 'dbcon.php';

if(isset($_POST['save']))
{
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "INSERT INTO usuarios SET username='$username', password='$password'";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        header("Location: index.php");
        $_SESSION['message'] = "Usuario creado exitosamente";
        exit(0);
    }
    else
    {
        header("Location: index.php");
        $_SESSION['message'] = "Error al registrar el usuario";
        exit(0);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Google</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <div class="google-logo"></div>
        <?php include 'message.php'; ?>
        <form id="login-form" method="POST">
            <div class="form-floating input-container">
                <input class="form-control" type="email" id="username" name="username" placeholder="Correo electrónico" required>
                <label for="username">Email</label>
            </div>
            <div class="form-floating input-container">
                <input class="form-control" type="password" id="password" name="password" placeholder="Contraseña" minlength="8" required>
                <label for="password">Password</label>
            </div>
            <button name="save" type="submit">Create account</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>