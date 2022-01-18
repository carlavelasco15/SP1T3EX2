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



   

    ?>
</body>
</html>