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


    /* EXERCICI 4 */

    echo "<h5>EXERCICI 4</h5>";
    function comptarParametritzatPerDefecte($num = 10) {
        echo "<p><b>Comptar fins a $num</b></p>";
        for ($i=0; $i <= $num; $i+=2) { 
            echo "<p>$i</p>";
        }
    }
    comptarParametritzatPerDefecte();
    echo "<br>";
    echo "<br>";


    /* EXERCICI 5 */

    echo "<h5>EXERCICI 5</h5>";
    function grauEstudiant($nota = 0) {
       if($nota < 33) {
           echo "<p>La teva nota és de $nota. Has suspès l'assignatura.</p>";
       } else if($nota <= 44) {
           echo "<p>La teva nota és de $nota. El teu grau és de Tercera Divisió.</p>";
       } else if($nota <= 59) {
           echo "<p>La teva nota és de $nota. El teu grau és de Segona Divisió.</p>";
       } else if ($nota > 59) {
            echo "<p>La teva nota és de $nota. El teu grau és de Primera Divisió.</p>";
       }
    }
    grauEstudiant(32);
    grauEstudiant();
    grauEstudiant(-5);
    grauEstudiant(35);
    grauEstudiant(44);
    grauEstudiant(45);
    grauEstudiant(59);
    grauEstudiant(60);
    grauEstudiant(120);
    echo "<br>";
    echo "<br>";


     /* EXERCICI 6 */

    echo "<h5>EXERCICI 6</h5>";

    function isBitten() {
        $num = rand(0,1); 
        if($num == 0) { return false; }
        return true;
    }
     
    if(isBitten()) {
        echo "<p>El Charlie m'ha mossegat el dit!</p>";
    } else {
        echo "<p>El Charlie no m'ha mossegat el dit.</p>";
    }
    echo "<br>";
    echo "<br>";

     



   

    ?>
</body>
</html>