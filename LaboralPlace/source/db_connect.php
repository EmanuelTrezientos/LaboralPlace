<?php

$username = 'root';
$password = '';
$dsn = 'mysql:host=localhost; dbname=alta';

try {

  $conn = new PDO($dsn, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

  echo "No hubo conexión a la base de datos".$e->getMessage();

}

?>
