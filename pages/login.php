<?php
require '../db.php';
$data = $_POST;
$showError = False;

if (isset($data['signin'])){
    $errors = array();
    $showError = True;

if(trim($data['email']) == ''){
    $errors[] = 'Укажите email!';
}
if(trim($data['password']) == ''){
    $errors[] = 'Укажите пароль!';
}

$user = R::findOne('users', 'email = ?', array($data['email']));
if($user) {
    if (password_verify($data['password'], $user->password)){
        $_SESSION['user'] = $user;
    } else {
        $errors[] = 'Неверный пароль';
    }
}else{
    $errors[] = 'Пользователь не найден';

}
}
?>

<!doctype html>
<html lang="ru">
<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/blogs/header.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/blogs/navigation.php');
?>
<body>


    <div class="login-box">
        <h2>Авторизация</h2>
        <form action="login.php" method="post">
            <div class="user-box">
                <input type="email" name="email" required="" placeholder="Ваш email: ">
            </div>
            <div class="user-box">
                <input type="password" name="password" required="" placeholder="Пароль: ">
            </div>
            <button type="submit" name="signin">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Отправить
            </button>
        </form>
        <p><?php if($showError){echo showError($errors);} ?></p>
    </div>
    <?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/blogs/footer.php');
    ?>
</body>

</html>
