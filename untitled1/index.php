<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <link rel="stylesheet" href="vendor/style/style.css">
    <?php
    include __DIR__."/connect.php";
    ?>
</head>
<body>
<div class="header">
<div class="buttons">
    <form action="../untitled1/vendor/auth/register.php" class="form" method="post">
        <button class="button-register">Register</button>
    </form>
    <form action="../untitled1/vendor/auth/login.php">
        <button type="submit" class="button-register">Login</button>
    </form>
</div>


</div>

<div class="footer">
    Maked my Misha Mazhura
</div>




</body>
</html>