<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<form action="" method="post" class="form-register">
    <label for="Login">Login</label>
    <label>
        <input type="text" name="login" required>
    </label>
    <label for="email">E-mail</label>
    <label>
        <input type="email" name="email" required>
    </label>
    <label for="password">Password</label>
    <label>
        <input type="password" name="password" required>
    </label>
    <label for="password2">Repeat password</label>
    <label>
        <input type="password" name="password2" required>
    </label>
    <input type="submit" name="submit">
</form>

<?php
require '../../connect.php';
if (!empty($_POST)){

    if (   !empty($_POST['login'])
        && !empty($_POST['email'])
        && !empty($_POST['password'])
        && !empty($_POST['password2'])){

        if ($_POST['password'] === $_POST['password2']){
            $login = $_POST['login'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query = "INSERT INTO maz10.sitedb (login, email, password) VALUES ('$login','$email','$password')";
            $result = mysqli_query($GLOBALS['connect'],$query);
            if ($result){
                header('Location: /untitled1/index.php');
            }else echo 'Ой, что-то пошло не так';

        }
    }



}


?>



<div class="footer">
    <p>
        Maked my Misha Mazhura
    </p>

</div>
</body>
</html>