<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numeroRandomico = rand(1, 20);
        $numeroScelto = $_GET["numero"];
        if(!isset($_SESSION["tentativi"])) {
            $_SESSION["tentativi"] = 0;
        }else{
            $_SESSION["tentativi"]++;
        }
        if ($numeroRandomico == $numeroScelto) {
            echo "Hai indovinato! Hai indovinato in " . $_SESSION["tentativi"] . " tentativi <br>";
        }else {
            echo "Hai sbagliato! Hai indovinato in " . $_SESSION["tentativi"] . " tentativi <br>";
        }
        echo "<a href='scelta.html'>Ricomincia</a>"
    ?>
</body>
</html>