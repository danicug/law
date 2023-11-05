<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
    function recupera($num1, $num2) {
        echo '<table border="1">';
        echo '<tr>';
        echo '<th></th>';
        for ($numero1 = 50; $numero1 <= 60; $numero1++) {
            echo '<th>' . $numero1 . '</th>';
        }
        echo '</tr>';
        for ($numero2 = $num1; $numero2 <= $num2; $numero2++) {
            echo '<tr>';
            echo '<th>' . $numero2 . '</th>';
            for ($numero1 = 50; $numero1 <= 60; $numero1++) {
                $contenido = ($numero1 % $numero2 == 0) ? '*' : '-';
                echo '<td>' . $contenido . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        recupera($num1, $num2);
    }
    ?>
</body>
</html>
