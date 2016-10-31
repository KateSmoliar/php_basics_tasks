
<!doctype html>
<html>
<head>
    <meta charset="utf-8"
</head>
<body>
<form action="" method="get">
    <lable for "n1">Введите число1 </label>
    <input type="number" name = "num1" id = "n1"><br><br>
    <lable for "n2">Введите число2 </label>
    <input type="number" name = "num2" id = "n2"><br>
    <input type = "submit"><br>
</form>
<?php
if (isset ($_GET['num1']))
{
    $a = $_GET['num1'];
}
if (isset ($_GET['num2']))
{
    $b = $_GET['num2'];
}
if (isset ($_GET['num1']) AND isset ($_GET['num2']))
{

    if ($a>$b)
    {
        echo $a;
    }
    else
    {
        echo $b;
        echo "<br>";
    }
}
?>

</body>
</html>
