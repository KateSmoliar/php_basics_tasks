
<?php

$a = 78;
$b = 78;

settype($a, 'string');
settype($b, 'int');
if ($a == $b)
{
    echo "Равны<br>";
}
else
{
    echo "Не равны<br>";
}

if ($a === $b)
{
    echo "Эквивалентны<br>";
}
else
{
    echo "Не эквивалентны<br>";
}

var_dump ($a);
echo '<br>';
var_dump ($b);
?>
