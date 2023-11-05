<!DOCTYPE html>
<html>
<head>
</head>
<body>

<table border="1">
    <tr>
        <th></th>
        <?php
        for ($numero1 = 50; $numero1 <= 60; $numero1++) {
            echo '<th>' . $numero1 . '</th>';
        }
        ?>
    </tr>
    <?php
    for ($numero2 = 1; $numero2 <= 10; $numero2++) {
        echo '<tr>';
        echo '<th>' . $numero2 . '</th>';
        for ($numero1 = 50; $numero1 <= 60; $numero1++) {
            $contenido = ($numero1 % $numero2 == 0) ? '*' : '-';
            echo '<td>' . $contenido . '</td>';
        }
        echo '</tr>';
    }
    ?>
</table>

</body>
</html>
