<?php 
/* 
## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$user_name = $_GET['name'];
$user_mail = $_GET['mail'];
$user_age = $_GET['age'];

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
    <?php if(strlen($user_name) >3 && strpos($user_mail,'@') && strpos($user_mail,'.') && is_numeric($user_age)) : ?>
    <p>
        Accesso Riuscito
    </p>
    <?php else : ?>
    <p>Accesso Negato</p>

    <?php endif; ?>



</body>
</html>


