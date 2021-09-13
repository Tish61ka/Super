<?php
$result = require __DIR__ . '/Бульбулятор.php';
?>
<html>
<head>
    <title>Калькулятор</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="">
    <input type="text" name="x1" placeholder="Введите первое значение">
    <select class="operation" name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="x2" placeholder="Введите второе значение">
    <input class="submit" type="submit" value="Посчитать">
</form>

<b>Результат вычислений:</b>
    <br>
    <?= $result ?>
</body>
</html>