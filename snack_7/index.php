<?php
/* 
## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe.
 Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
 Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$students = [
    ["first_name" => "Davide", "last_name" => "Mucci", "votes" =>   [6, 7, 5, 9, 10]],
    ["first_name" => "Michele", "last_name" => "Rossi",  "votes" => [10, 7, 5, 9, 9]],
    ["first_name" => "Sara", "last_name" => "Valli", "votes" =>[4, 7, 5, 6, 9]],
    ["first_name" => "Giuseppe", "last_name" => "Chiari", "votes" => [10, 7, 2, 9, 9]],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Students:
    </h1>

<?php for ($i=0; $i < count($students) ; $i++) { ?>
    <p>
    <?php  echo $students[$i]['first_name'] . ' ' . $students[$i]['last_name'] . ' media voti:' . array_sum($students[$i]['votes']) / count($students[$i]['votes']);   ;
} ?>

    
</p>



</body>

</html>