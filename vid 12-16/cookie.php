<?php 

$cookie_name = 'user';
$cookie_value = 'jontor';

setcookie($cookie_name, $cookie_value);

$cookie_value = 'tejo';

setcookie($cookie_name, $cookie_value);

echo $_COOKIE[$cookie_name];

setcookie("user","",time() - 3600);

var_dump($_COOKIE); 

?>