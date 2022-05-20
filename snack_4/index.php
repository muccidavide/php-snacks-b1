<?php 
/* 
## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

$randomArray = [];

for ($i=0 ; count($randomArray) < 15 ; $i++) { 

   $random_number = random_int(0, 100);

   if (!in_array($random_number, $randomArray)) {
        array_push($randomArray, $random_number);
   }
}

var_dump($randomArray);

?>


