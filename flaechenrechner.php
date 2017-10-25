<html>


<head>

    <link href="css.css" rel="stylesheet" type="text/css">

</head>

<body>

<div class="wrapper" align="center">
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    Laenge in m: <input type="number" name="laenge" id="laenge"><br>
    Breite in m: <input type="number" name="breite" id="breite"><br>
    <br>
    Berechnen: <input type="submit" name="berechnen" value="Berechnen">
</form>
</div>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $x = $_REQUEST['laenge'];
    $y = $_REQUEST['breite'];
    $sum = $x * $y;
    $sum = number_format($sum, 0, ',', '.');

    if (empty($x)) {
        echo "Keine Eingabe der Länge";

    } elseif (empty($y)) {
        echo "Keine Eingabe der Breite";
    }else{

        echo "Fläche in m²:"." ".$sum ;
       // echo number_format($sum);

}
}















/**
 * Created by PhpStorm.
 * User: Elias
 * Date: 20.09.2017
 * Time: 15:56
 */

?>



</body>








</html>