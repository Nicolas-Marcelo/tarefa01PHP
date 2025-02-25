<?php
  $array = [0, 1];

  echo "Fibonacci:<br/>";
  
  for ($i = 2; $i < 10; $i++) { 
    $soma = $array[$i - 1] + $array[$i - 2];
    $array[] = $soma; 
  }

  foreach ($array as $indice => $numero) {
    echo "Posição $indice: $numero <br/>";
  }
?>
