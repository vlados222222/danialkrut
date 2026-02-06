<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>
    <header>
        <h1>ПрокатВещей</h1>
        <nav>  
            <a href="index.php">Регистрация</a>
            <a href="#">Авторизация</a>
        </nav>
    </header>
    <div class="authForm">
        <form method = "POST" action = "authoriz.php">
            <div class="form-group">
                <label type = "reqiured">Логин</label>
                <input type="text" name = "login" placeholder = "Ваш логин" required>
                <div class="hint">Введите ваш логин</div>
            </div>
            <div class="form-group">
                <label type = "reqiured">Пароль</label>
                <input type="password" name = "password" placeholder = "Ваш пароль" required>
                <div class="hint">Введите ваш пароль</div>
            </div>
            <button type = "submit">Войти</button>
        </form>
    </div>
</body>
</html>