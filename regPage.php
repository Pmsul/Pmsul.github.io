<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="php/reg.php" method="post">
        <input type="text" name="login" placeholder="Введите логин" required>
        <input type="text" name="fio" placeholder="Введите ваше ФИО" required>
        <input type="password" name="password" placeholder="Введите пароль" required>
        <input type="password" name="repPassword" placeholder="Повторите пароль" required>
        <input type="email" name="email" placeholder="Введите email" required>
        <input type="text" name="tel" placeholder="Введите телефон" required>
        <input type="submit" value="Зарегестрироваться">
    </form>
</body>

</html>