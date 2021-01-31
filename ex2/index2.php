<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<!-- php -->
<?php 
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];
    $at = strpos($mail, "@");
    $dot = strpos($mail. ".");

 ?>
<!-- /php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Ciao! questi sono i dati inseriti:</h1>
   <p>nome:</p>
   <p><?php 
    if (strlen($name) < 3 ) {
        echo 'Nome troppo corto!';
    } else{
        echo $name;
    };
   ?>
   </p>
   <p>
   <?php if (strpos($mail, '@') === false || strpos($mail, '.') === false) {
       echo 'Non è una mail valida!';
   }else{
       echo $mail;
   };
    ?>
    </p>
    <p>Età:</p>
    <p>
    <?php 
        if (is_int($age)) {
            echo 'non è un numero!';
        } else {
            echo $age;
        };
     ?></p>
</body>
</html>