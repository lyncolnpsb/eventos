<?php 
    session_start();
    $email = $_SESSION['email']
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.css">
</head>
    <body>
        <?php 
            echo "Email ($email) ainda conectado !";
        ?>
        <a href="sair.php">sair</a>
    </body>
</html>