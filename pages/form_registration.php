<?php
require '../db.php';
$data = $_POST;
$showError = False;

if (isset($data['signup'])){
    $errors = array();
    $showError = True;

    if(trim($data['firstname']) == ''){
        $errors[] = 'Укажите имя!';
    }
    if(trim($data['lastname']) == ''){
        $errors[] = 'Укажите фамилию!';
    }
    if(trim($data['email']) == ''){
        $errors[] = 'Укажите email!';
    }
    if(trim($data['password']) == ''){
        $errors[] = 'Укажите пароль!';
    }
    if(trim($data['password']) != trim($data['password_2'])){
        $errors[] = 'Пароли не совпадают!!';
    }
    if(R::count('users', 'email = ?', array($data['email'])) > 0){
        $errors[] = 'Пользоватедь с таким email уже существует';
    }
    if(empty($errors)){
      $user = R::dispense('users');
      $user->firstname = $data['firstname'];
      $user->lastname = $data['lastname'];
      $user->email = $data['email'];
      $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
      R::store($user);
    }
}
?>

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
    <form action="form_registration.php" method="post">
        <div class="user-box">
            <input type="text" name="firstname" required="" placeholder="Имя:">
        </div>
        <div class="user-box">
            <input type="text" name="lastname" required="" placeholder="Фамилия:">
        </div>
        <div class="user-box">
            <input type="email" name="email" required="" placeholder="email:">
        </div>
        <div class="user-box">
            <input type="password" name="password" required="" placeholder="Пароль:">
        </div>
        <div class="user-box">
            <input type="password" name="password_2" required="" placeholder="Подтвердить пароль:">
        </div>
        <button type="submit" name="signup">
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

