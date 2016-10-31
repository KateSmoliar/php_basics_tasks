<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
</head>
<body>

<form action="" method="get">
    <lable for = '1'>Введите первое число</lable>
    <input type = 'number' name = 'num1' id="1"><br><br>
    <lable for = '2'>Введите второе число</lable>
    <input type = 'number' name = 'num2' id="2"><br>
    <lable for = "operation">Выберите операцию:</lable><br>
    <input type="radio" id = "operation" value = '1' name = 'operation'/>+ сложить <br>
    <input type="radio" id = "operation" value = '2' name = 'operation'/>- отнять <br>
    <input type="radio" id = "operation" value = '3' name = 'operation'/>/ поделить <br>
    <input type="radio" id = "operation" value = '4' name = 'operation'/>* умножить <br>
    <input type = "submit">
</form>

<?php

if (isset($_GET['num1']))
{
$a = $_GET['num1'];
}
if (isset($_GET['num2']))
{
    $b = $_GET['num2'];
}

if (isset($_GET['operation'])) {
    $c = $_GET['operation'];

}

if (isset ($c)) {
    switch ($c) {
        case (($c == 3) AND ($b == 0)):
            echo "ERROR!!!! B can't be 0, when you use '/'";
            break;
        case ($c == 1):
            echo $a + $b;
            break;
        case ($c == 2):
            echo $a - $b;
            break;
        case ($c == 3):
            echo $a / $b;
            break;
        case ($c == 4):
            echo $a * $b;
            break;

    }
}
?>


</body>
</html>