<?php
$day = 28;                                                                      //9

switch ($day) {
    case (($day >= 1) AND ($day <= 5)) :
        echo "Это рабочий день";
        break;                                                              //10
    case (($day == 6) OR ($day == 7)) :
        echo "Это выходной день";
        break;                                                              //11
    default:
        echo "Неизвесный день<br>";                                              //12
}
