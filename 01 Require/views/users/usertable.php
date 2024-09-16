<?php 

$sql = 'SELECT * FROM users ORDER BY last_name';
$stmt = $pdo->query($sql);
// echo $stmt;

$users = $stmt->fetchAll();

?>




