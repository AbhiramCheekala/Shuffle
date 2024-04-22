<?php

$name=filter_input(INPUT_POST,'name');
$password=filter_input(INPUT_POST,'password');
echo "Name: " . $name . "<br>";
echo "Email: " . $password . "<br>";




?>
