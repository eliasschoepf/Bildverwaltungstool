<?php
/**
 * Created by PhpStorm.
 * User: Elias
 * Date: 03.10.2017
 * Time: 15:28
 */


$cookie_name = "loggedin";

if(isset($_COOKIE[$cookie_name])){


    $cookie_value = $_COOKIE[$cookie_name];
    echo "Welcome to your admin area $cookie_value";
    echo '<a href="logout.php">Logout</a>';
}


?>