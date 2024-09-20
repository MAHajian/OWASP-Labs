<?php

$code = @$_GET['echo'];

$output = eval("print('$code');");

echo $output;


?>
