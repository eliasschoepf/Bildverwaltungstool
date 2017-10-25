<?php
/**
 * Created by PhpStorm.
 * User: Elias
 * Date: 03.10.2017
 * Time: 15:33
 */


setcookie("loggedin","val",time() - (120), "/");
header("Location: index.php");

?>