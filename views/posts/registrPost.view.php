<?php
session_start();
$title="Авторизация пользователя";
require_once __DIR__."/../parts/header.php";
?>
<div class="container col-md-5 col-offset-3">
    <hr>
    <div class="alert <?= $_SESSION["alert"] ?>" role="alert">
        <?= nl2br($_SESSION["msg"]) ?>
    </div>
    <hr>
    <form action="action.php" method="post">
        <div class="form-group">
            <label for="name">Ваше имя:</label>
            <input type="text" class="form-control"
                   id="name" name="name" autofocus value="">

            <br> <label for="login">Ваш email:</label>
            <input type="email" class="form-control"
                   id="login" name="login" autofocus value="">
            <br> <label for="pass">Введите пароль:</label>
            <input type="password" class="form-control"
                   id="pass" name="pass" autofocus  value=""><br>
            <label for="pass">Подтвердите пароль:</label>
            <input type="password" class="form-control"
                   id="passGo" name="passGo" autofocus  value=""><br>

            <button type="submit" class="btn btn-success" name="go">Зарегистриваться</button>
        </div>
    </form>
<?php require_once __DIR__."/../parts/footer.php"?>