<?php
// define os dados para conexao com o BD
// constantes
define('SERVERNAME', 'localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','db_bradesco');


try {
  $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME."", USERNAME, PASSWORD);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>