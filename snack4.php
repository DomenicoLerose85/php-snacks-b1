<?php 

 function creaarreydicasuali($min, $max, $iTems) {
    $newarrey = [];

    while(count($newarrey)<15){

        $number = rand(0,20);

        if(!in_array($newarrey, $number)){
            $newarrey[]=$number;
        }
    }

}

?>

<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACK4</title>
</head>
<body>
    
</body>
</html>