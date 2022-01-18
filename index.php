<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bàsic</title>
</head>
<body>

    <?php
    /* EXERCICI 1 */

    echo "<h5>EXERCICI 1</h5>";

    function esParell($num) {
        if($num % 2 == 0)  {
            echo "<p>El número $num és parell.</p>";
        } else {
            echo "<p>El número $num és senar.</p>";
        }
    }
    esParell(5);
    esParell(4);
    echo "<br>";
    echo "<br>";

     /* EXERCICI 2 */

     echo "<h5>EXERCICI 2</h5>";
     function comptarFins10() {
         echo "<p><b>Comptar fins a 10</b></p>";
         for ($i=0; $i <= 10; $i+=2) { 
             echo "<p>$i</p>";
         }
     }
     comptarFins10();
     echo "<br>";
     echo "<br>";


    /* EXERCICI 3 */

    echo "<h5>EXERCICI 3</h5>";
    function comptarParametritzat($num) {
        echo "<p><b>Comptar fins a $num</b></p>";
        for ($i=0; $i <= $num; $i+=2) { 
            echo "<p>$i</p>";
        }
    }
    comptarParametritzat(16);
    echo "<br>";
    echo "<br>";
     



   

    ?>
</body>
</html>