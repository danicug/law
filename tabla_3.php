<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
    include 'recupera.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        recupera($num1, $num2);
    }
    ?>

    <form action="tabla_3.php" method="post">
        <label for="num1">Primer numero:</label>
        <input type="number" name="num1" id="num1" min="1" max="10" required><br>
        <label for="num2">Segundo numero::</label>
        <input type="number" name="num2" id="num2" min="10" max="20" required><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
