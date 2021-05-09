<?php 
require_once 'env.php';
// ini_set('display_errors', true);
function connect(){
  $host = DB_HOST;
  $db = DB_NAME;
  $user = DB_USER;
  $pass = DB_PASS;

  $dsn = "mysql:host=$host;dbname=$db;charset=utf8";

  try {
    $pdo = new PDO($dsn, $user, $pass, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    // echo 'Mysql接続に成功しました';
    // echo '<br>';
    return $pdo;
  } catch(PDOException $e) {
    exit($e->getMessage());
    // echo '<br>';
  }
}

// echo connect();
?>