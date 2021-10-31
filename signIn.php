<?php require 'template/header.php' ?>
    <main>
        <div class="signUp">
        <form action="vendor/auth.php" method="post" class="form-signUp" enctype="multipart/form-data">
            <h2>Авторизация</h2>
            <label>
                <input type="text" placeholder="Логин" name="login">
                <input type="password" placeholder="Пароль" name="password">
                <input type="submit" value="Войти"  class="signUp-btn">
            </label>

        </form>
    </div>
    </main>
<?php require 'template/footer.php' ?>

