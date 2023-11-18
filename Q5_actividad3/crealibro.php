<?php 

include("cabecera.php");

if (isset($_POST['register'])){
    $isbn = $_POST['isbn'];
    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];

    $insertarDatos = "INSERT INTO libros VALUES ('$nombre', '$autor', '$isbn', '', '', '')";

    $ejecutarInsertar = mysqli_query($conexion, $insertarDatos);

    if ($ejecutarInsertar) {
        echo "Libro insertado correctamente.";
    } else {
        echo "Error al insertar el libro: " . mysqli_error($conexion);
    }
}

?>
