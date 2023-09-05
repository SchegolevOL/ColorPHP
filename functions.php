<?php
$host = 'localhost';
$db = 'colors_db';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$pdo = new PDO($dsn, $user, $pass, $options);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function getColors(): array
{
    global $pdo;
    $res = $pdo->prepare("SELECT color FROM colors_tab");
    $res->execute();
    $result = [];
    while ($row = $res->fetch()) {
        $result[] = $row;
    }

    return $result;
}
