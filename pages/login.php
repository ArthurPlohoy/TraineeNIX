<!doctype html>
<html lang="ru">
<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/blogs/header.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/blogs/navigation.php');
?>
<body>


    <div class="login-box">
        <h2>Авторизация</h2>
        <form>
            <div class="user-box">
                <input type="text" name="" required="" placeholder="Имя пользователя: ">
                <label></label>
            </div>
            <div class="user-box">
                <input type="password" name="" required="" placeholder="Пароль: ">
                <label></label>
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
