<?php
ini_set('display_errors',1);
error_reporting(E_ALL);


$connect = mysqli_connect('localhost','root','1234','maz10');
/*if (!$connect) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
} else {echo "Connected!" . PHP_EOL."<br>";
    echo "Информация о сервере: " . mysqli_get_host_info($connect) . PHP_EOL;

}*/