<?php
session_start();

if(!$_SESSION['user']){
    header('Location: ../php/avt.php' );
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="../css/styleavt.css">
</head>

<body>
    <form>
        <img src="<?= $_SESSION['user']['avatar']?>" width="300" alt="">
        <h2><?= $_SESSION['user']['full_name']?></h2>
        <a href="#"><?= $_SESSION['user']['email']?></a>
<a href="../vendar/out.php">Выход</a>
    </form>
</body>

</html>