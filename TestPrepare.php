<?php

  require_once __DIR__ . "/GetConnection.php";

  $connection = getConnection();
  $sql = "SELECT *FROM admin WHERE username = :username AND password = :password";
  $statement = $connection->prepare($sql);
  $connection = null;
