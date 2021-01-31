<!-- /* Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 */ -->


<!-- php -->
<?php  
//! snack 1
 $partite = [
    'girone-A' => [
        'Parma - Felino',
        'Colorno - Langhirano',
        'Torrile - Varano',
    ],
    'girone-B' => [
        'Torrile - Parma',
        'Colorno - Varano',
        'Langhirano - Felino',
    ],
    'punti-A' =>[
        '34-54',
        '40-60',
        '20-20',
    ],
    'punti-B' =>[
        '50-60',
        '30-45',
        '23- 30'
    ]
];
?>
<!-- /php -->
<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Snacks 1</title>
</head>
<body>
    <h1>Partite di basket</h1>
    <p>
    <p><strong>Primo girone</strong></p>
    <?php 
        for ($i=0; $i <count($partite['girone-A']) ; $i++) { 
            echo "<p>" . $partite['girone-A'][$i] . "<span>" . ' ' . $partite['punti-A'][$i] . "</span>" . "</p>";
        };
     ?>
    </p>
    <p><strong>Secondo girone</strong></p>
    <p>
    <?php 
        for ($i=0; $i <count($partite['girone-B']) ; $i++) { 
            echo "<p>" . $partite['girone-B'][$i] . "<span>" . ' ' . $partite['punti-B'][$i] . "</span>" . "</p>";
        }
    ?>
    </p>
     
</body>
</html>
<!-- /html -->
