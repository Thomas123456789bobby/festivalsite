<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tikets.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&display=swap" rel="stylesheet">
    <title>Document</title>
    </head>
    <body>
    <div class="main_box">
    <h1>corfim</h1>
    
    <?php
    $text_1 = $_POST['text_1'];
    $text_2 = $_POST['text_2'];
    $getal_1 = $_POST['getal_1'];
    $text_3 = $_POST['text_3'];
    $text_4 = $_POST['text_4'];
    $getal_2 = $_POST['getal_2'];
    echo "voornaam: $text_1";
    echo "<br>" ;
    echo "achternaam: $text_2";
    echo "<br>" ;
    echo "leeftijt: $getal_1";
    echo "<br>" ;
    echo "e-mail: $text_3";
    echo "<br>" ;
    echo "aders: $text_4";
    echo "<br>" ;
    echo "aantal: $getal_2";
    echo "<br>" ;  
      ?>
      <input id="box" type="submit" value="corfim">
 </div>
    
   </body>
   </html>