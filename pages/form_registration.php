<!doctype html>
<html lang="en">
<?php
include_once '../blogs/header.php'
?>
<?php
include_once '../blogs/navigation.php'
?>
<body>

<div class="login-box">
    <h2>Регистрация</h2>
    <form>
        <div class="user-box">
            <input type="text" name="" required="" placeholder="Имя:">
            <label></label>
        </div>
        <div class="user-box">
            <input type="text" name="" required="" placeholder="Фамилия:">
            <label></label>
        </div>
        <div class="user-box">
            <input type="email" name="" required="" placeholder="email:">
            <label> </label>
        </div>
        <div class="user-box">
            <input type="password" name="" required="" placeholder="Пароль:">
            <label> </label>
        </div>
        <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Отправить
        </a>

    </form>
</div>
<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/blogs/footer.php');
?>
</body>
</html>

