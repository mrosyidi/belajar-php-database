<?php

  $host = "localhost";
  $port = 3306;
  $database = "belajar_php_database";
  $username = "root";
  $password = "12345";

  try
  {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi ke database" . PHP_EOL;
  }catch(PDOException $exception)
  {
    echo "Error terkoneksi ke database : " . $exception->getMessage() . PHP_EOL;
  }
