<?php
$frutas =array("manzana", "pera", "naranja", "platano");


echo $frutas [0];

if ($frutas[0] == "manzana") {
    echo "<br>" . " Es una manzana";
} else {
    echo "<br>" . " No es una manzana";
}

$frutas2 = array(
    "manzana" => "roja",
    "pera" => "verde",
    "naranja" => "naranja",
    "platano" => "amarillo"
);
echo "<br>" . $frutas2["platano"]


?>