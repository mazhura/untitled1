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
<?php
require '../../connect.php';
$isLogged = false;

function check($email,$password){
    $query = "SELECT * FROM maz10.sitedb WHERE email='$email' AND password='$password'";
    return mysqli_query($GLOBALS['connect'],$query)->fetch_array();
}

$logged = check($_POST['email'],$_POST['password']);

if (!is_null($logged)){
    $isLogged = true;
}

if (!$isLogged) { ?>
    <form action="" method="post" class="form-register">
        <h2>Authorise</h2>
        <label for="email">E-mail</label>
        <label>
            <input type="email" name="email" required>
        </label>
        <label for="password">Password</label>
        <label>
            <input type="password" name="password" required>
        </label>
        <input type="submit">


    </form>
    <?php }

if ($isLogged){?>
<div class="data-info">
    <p>Ваш логин: <?php echo $logged['login']?></p>
    <p>Ваш айди: <?php echo $logged['id']?></p>
    <p>Ваш мейл: <?php echo $logged['email']?></p>
</div>



<?php } ?>


</body>
</html>