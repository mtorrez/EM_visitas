<?php
require_once('LibroVisitas.php');
?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Libro de Visitas</title>
</head>

<body>

    <h1>Libro de visitas</h1>
    <?php

    if ( isset($_POST['nombre']) && isset($_POST['texto']) ){
        $objaux = new LibroVisitas();
        $objaux->escribirLibro($_POST['nombre'],$_POST['texto']);
    }

    $objLibro = new LibroVisitas();
    echo $objLibro->leerLibro();

     ?>

    <form action="" method="post">
        <table>
            <tr>
            <td>Nombre:</td>
            <td><input type="text" name="nombre" /></td>
            </tr>
            <tr>
            <td>Comentario:</td>
            <td><textarea name="texto"></textarea></td>
            </tr>
            <tr>
            <td></td>
            <td><input type="submit" value="Enviar" /> </td>
            </tr>
        </table>

    </form>

</body>

</html>