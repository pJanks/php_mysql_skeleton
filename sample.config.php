<?php
  try {
    error_reporting(-1); // remove in production

    define('SERVER', /* localhost or ip address */);
    define('USERNAME', /* db user */);
    define('PASSWORD', /* db password */);
    define('DB', /* db name */);
    
    $pdo = new PDO('mysql:host=' . SERVER . ';dbname=' . DB, USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    $dateTime = new DateTime();
    $date = $dateTime->format('m.d.y h:i:s A');
    $errorMessage = $e->getMessage();
    $line = $e->getLine();
    $logMessage = "$date: $errorMessage in config.php on line $line\n";
    file_put_contents('logs/error.log', $logMessage, FILE_APPEND);
  }