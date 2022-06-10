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
    <form action="../vendar/signup.php" method="post" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите полное имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите свою почту">
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунта? - <a href="avt.php"> Авторизируйтесь </a>!
        </p>
        <?php
        if ($_SESSION['message']) {
            echo '<p class = "msg"> ' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        ?>
       
    </form>
</body>

</html>