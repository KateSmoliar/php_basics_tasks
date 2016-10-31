<?php

$a = 20 ;
$b = 0;
$c = -20;
settype ($a, 'boolean');  //false будет только если значение было 0, во всех остальных 1
var_dump ($a);
settype ($b, 'boolean');
var_dump ($b);
settype ($c, 'boolean');
var_dump ($c);
