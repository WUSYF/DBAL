<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 27.01.19
 * Time: 20:20
 */
require_once 'vendor/autoload.php';

$config = new \Doctrine\DBAL\Configuration();
$connectionParams = array
(
    'dbname' => 'WEBT',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
$sql = "SELECT * FROM mitarbeiter";
$sqlReturn = $conn->query($sql);

while ($row = $sqlReturn->fetch()){
    echo $row['nachname'].' ';
    echo $row['vorname'].' ';
    echo $row['gebDatum'].' ';
    echo $row['PLZ'].' ';
    echo $row['strasse'].' ';
    echo "<br><br>";
    echo "Hofmann ist ein Kek xd";
}
