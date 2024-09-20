<?php 
# Variables database connection
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION, # Error reporting mode
    PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC, # Default fetch mode
    PDO::ATTR_EMULATE_PREPARES      => false, #Emulation prepared statements
];

# Db connection and exception handling
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}