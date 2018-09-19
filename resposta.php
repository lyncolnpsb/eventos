<?php 
    $email = strip_tags($_POST['email']);
    session_start();
    $_SESSION['email'] = $email;
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
        echo "$email conectado"
    ?>
    <p><a href="verifica.php">verificar<a/></p> 
</body>
</html>