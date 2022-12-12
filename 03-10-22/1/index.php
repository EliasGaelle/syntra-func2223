<?php

    $voornaam = "Gaelle"; 
    $achternaam = "elias";
    $getal1 = 7; 
    $getal2 = 5;
    $getal3 = 3;
    $getal3 = $getal1 + 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Document </title>
</head>
<body>
  <?php
    echo "<h1>hallo " . $voornaam ." ". $achternaam . ",</h1>"; 
    echo "<h3>". $getal3 . "</h3>";
  
  ?>
</body>
</html>