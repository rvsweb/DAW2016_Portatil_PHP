<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$arrays_asociativos = 5;
$b = rand(1, 100);

echo "<br>";
echo $b;
echo "<br>";

if ($arrays_asociativos > $b) {
  echo "A es mayor que B";
} elseif ($arrays_asociativos == $b) {
  echo "A es igual que B";
} else {
  echo "A es menor que B";
}

echo "<br>";
$aa = 5;
$bb = 5;

echo "<br>";

if ($aa > $bb) {
  echo "A es mayor que B";
  echo "$aa";
  echo "<br>";
  echo "$bb";
} else if ($arrays_asociativos == $b) {
  echo "<br>";
  echo "$aa";
  echo "<br>";
  echo "$bb";
  echo "A es igual que B";
  echo "$aa";
  echo "<br>";
  echo "$bb";
} else {
  echo "<br>";
  echo "A es menor que B";
  echo "$aa";
  echo "<br>";
  echo "$bb";
}

/*
 * Nota: Tenga en cuenta que elseif y else if serán considerados exactamente iguales sólamente cuando se utilizan corchetes como en el ejemplo anterior. Al utilizar los dos puntos para definir las condiciones if/elseif, no debe separarse else if en dos palabras o PHP fallará con un error del interprete. 
 */

echo "<br>";
echo "  !!!!!!!!!! valor es !!!!!!!!! " . $bb;
echo "<br>";
/* Método correcto: */
if ($arrays_asociativos < $b):
  echo $arrays_asociativos . " es mayor que " . $b;
elseif ($arrays_asociativos == $b): // Tenga en cuenta la combinación de las palabras.
  echo $arrays_asociativos . " igual " . $b;
else:
  echo $arrays_asociativos . " no es ni mayor que ni igual a " . $b;
endif;
?>
