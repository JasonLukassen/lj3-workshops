<?php require '../config/db.conf.php';   # require db.conf.php file ?>
<?php require "../database/connection.php";?>
<?php require "../views/users/usertable.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Email</th>
        </tr>
        <?php 
            foreach ($users as $user) {
                echo "<tr>";
                echo "<td>{$user['id']}</td>";
                echo "<td>{$user['first_name']}</td>";
                echo "<td>{$user['last_name']}</td>";
                echo "<td>{$user['email']}</td>";
                echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>