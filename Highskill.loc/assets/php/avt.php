<?php
session_start();

if($_SESSION['user']){
    header('Location: ../php/profile.php' );
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

    <form action="../vendar/signin.php" method="post">
   
        <label>Логин</label>
        <input type="text" name = "login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name = "password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="register.php"> Зарегистрируйтесь </a>!
        </p>
         <?php
        if ($_SESSION['message']) {
            echo '<p class = "msg"> ' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        ?> 
        <button type="submit"><a href="../../index.html">Выход</a></button>
    </form>
</body>

</html>