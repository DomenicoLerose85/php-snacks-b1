<?php
// snack1
$matchesArray = [
    [
        "Casa" => "Los Angeles",
        "ospiti" => "Olimpia",
        "puntiCasa" => "30",
        "puntiOspiti"=> "40"

    ],
    [
        "Casa" => "Bari",
        "ospiti" => "Milano",
        "puntiCasa" => "90",
        "puntiOspiti"=> "30"

    ],
    [
        "Casa" => "Napoli",
        "ospiti" => "Roma",
        "puntiCasa" => "10",
        "puntiOspiti"=> "20"

    ],
];

// snack3

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
    // inserire qui gli array (se necessario)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack di gruppo</title>

<style>

        /* stile per lo snack 6 */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .grey, .green {
            padding: 40px;
            float: left;
            width: 50%;
        }
        .grey {
            background: grey;
        }
        .green {
            background: green;
        }

        /* se si vuole aggiungere altro css è preferibile creare un file apparte */

    </style>
    
</head>
<body>

<section id="snack1">
    
   <h1> Snack 1 </h1>
   <?php 
   for($i = 0; $i < count($matchesArray); $i++){
    echo $matchesArray[$i]["Casa"]." - ".$matchesArray[$i]["ospiti"]." | ".$matchesArray[$i]["puntiCasa"]."-".$matchesArray[$i]["puntiOspiti"]."<br>";
}
   
   ?>
​
        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->
​
    </section>
​
<section id="snack2">
        
     <h1> Snack 2 </h1>

<?php 

    

if(!empty($name) && !empty($email) && !empty($email)){
    $name = $_GET ["name"];
    $email = $_GET ["email"];
    $age = $_GET ["age"];
    $numCheck = is_numeric($age);
        if((strlen($name)>=3) && (strpos($email, ".") && strpos($email,"@")) && ($numCheck)){
        echo "Accesso riuscito";
        }else {
         echo "Accesso negato";
        }
    }else{
        echo 'Un campo non è stato inserito';
    }

?>
​
        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->
​
    </section>
​
    <section id="snack3">
        
        <h1> Snack 3 </h1>
    <?php 
    $arraykey = array_keys($posts);

    for($x=0; $x < count($arraykey); $x++) {
    $date = $arraykey;
    $dateValue = $date[$x];
    echo "{$dateValue} <br>";
    for($a = 0; $a < 2; $a++){
    echo "{$posts[$dateValue][$a]['title']}<br>{$posts[$dateValue][$a]['author']}<br>{$posts[$dateValue][$a]['text']}<br>";
    }

    };
    

    
    ?>
​
        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->
​
    </section>
​
    <section id="snack4">
        
        <h1> Snack 4 </h1>

<?php 

    function creaarreydicasuali($min, $max, $iTems) {
    $newarray = [];

    while(count($newarray)<15){

        $number = rand(0,20);

        if(!in_array($newarray, $number)){
            $newarray[]=$number;
        }
    }

}

?>
​
        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->
​
    </section>
​
    <section id="snack5">
        
        <h1> Snack 5 </h1>
​
        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->
​
    </section>
​
    <section id="snack6">
        
        <h1> Snack 6 </h1>
​
        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->
​
    </section>
​
    <section id="snack7">
        
        <h1> Snack 7 </h1>
​
        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->
​
    </section>
​
​
​
    
</body>
</html>
Riduci












