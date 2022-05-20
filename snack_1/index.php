<?php 

$match = [
    ['team_1' => "Olimpia", 'points_1' => "11",  'team_2' => "Cantù", 'points_2' =>"21"],
    ['team_1' => "Virtus", 'points_1' => "31",  'team_2' => "Dinamo", 'points_2' =>"27"],
    ['team_1' => "Brescia", 'points_1' => "23",  'team_2' => "Varese", 'points_2' =>"81"],
    ['team_1' => "Brindisi", 'points_1' => "26",  'team_2' => "Aquila", 'points_2' =>"31"],
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

  
    <?php
for ($i = 0; $i < count($match); $i++) { ?>
    <p>
    <?php echo $match[$i]['team_1'] . " - " . $match[$i]['team_2'] . " | " .  $match[$i]['points_1'] . " - " . $match[$i]['points_2'];
}
?>
    </p>

</body>
</html>


