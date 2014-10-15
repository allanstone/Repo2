<?php

$var="cadena";
$entero=4;

$hola="hola";

echo "cadenaasd".$var;

$arreglo = array(5,6,7);
$dos = array('uno' => 2 , 'dos' => 5 );

print_r($dos);

if ($entero==4) {
	echo "<br>es cuatro";
}

if ($entero==5):
	echo "Esc cuatro<br>adios";
else:
	echo "No es cuatro<br>no adios";
endif;

foreach ($dos as $key => $value) {
	# code...
	echo "<br>la llave es: ".$key."<br> el valor es: ".$value;
}

foreach ($dos as $value) {
	# code...
	echo "<br> el valor es: ".$value;
}

?>
