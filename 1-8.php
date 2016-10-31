<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 26.10.2016
 * Time: 17:15
 */
$name = 'Kate';                             //1
$age = '24';                                //2
echo "Меня зовут {$name}<br>";              //3
echo "Мне {$age} лет<br>";                   //4
if ((18 <= $age ) OR ($age <=59))          //5
{
    echo "Вам ещё работать и рабоать<br>";  //6
}
    elseif ($age > 59)
{echo "Вам пора на пенсию<br>";
}
    elseif (($age >= 0) OR ($age <= 17))        //7
    {
        echo "Вам ещё рано работать<br>";
    }
    elseif (($age < 0) AND (var_dump(is_numeric($age)) != true))  //8
    {
        echo "Неизвестный возраст";
    }

