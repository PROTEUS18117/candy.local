<?php

$db = mysqli_connect('localhost', 'admin', 'password','candy') or die('Подключение к БД не удалось');

// Создание таблиц
$query = 'DROP TABLE IF EXISTS sweets;';
$result = mysqli_query($db, $query);

$query = 'CREATE TABLE sweets
            (id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name varchar(60) NOT NULL DEFAULT "Не известно",
            src varchar(100) NOT NULL DEFAULT "Не известно",
            desk text NULL,
            price int NOT NULL);';
$result = mysqli_query($db, $query);
var_dump($result);

// Создание данных
$data = [
    array(
        'name'  => 'Торт из черного и белого шоколада.',
        'desk'  => 'Описание ...',
        'src'   => 'cake1.jpg',
        'price' => 1000
    ),
    array(
        'name'  => 'Тортик',
        'desk'  => 'Описание ...',
        'src'   => 'cake2.jpg',
        'price' => 450
    ),
    array(
        'name'  => 'Пирог',
        'desk'  => 'Описание ...',
        'src'   => 'pir1.jpg',
        'price' => 300
    ),
    array(
        'name'  => 'Пирог',
        'desk'  => 'Описание ...',
        'src'   => 'pir2.jpg',
        'price' => 300
    ),
    array(
        'name'  => 'Конфеты',
        'desk'  => 'Описание ...',
        'src'   => 'con1.jpg',
        'price' => 300
    ),
    array(
        'name'  => 'Конфеты',
        'desk'  => 'Описание ...',
        'src'   => 'con2.jpg',
        'price' => 300
    ),
];

foreach ($data as $sweet) {
    $query = "INSERT INTO `sweets`(`name`, `desk`, `src`, `price`) VALUES('". $sweet['name'] . "', '" . $sweet['desk'] . "', '" . $sweet['src'] . "', " . $sweet['price'] .")";
    $result = mysqli_query($db, $query);
    var_dump($result);
}

echo mysqli_errno($db) . ": " . mysqli_error($db) . "\n";
