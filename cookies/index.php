<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php


if (isset($_COOKIE["nombre"])) {
    echo 'Veces contada ' . ($_COOKIE['nombre'] + 1);

} else {
    echo 'Es la primera vez';
    setcookie("nombre", 1);
}


?>

<!--    <form>-->
<!---->
<!--        <label for="">Nombre</label>-->
<!--        <input type="text" name="nombre" id="">-->
<!---->
<!--        <br>-->
<!---->
<!--        <label for="">Número de teléfono</label>-->
<!--        <input type="number" name="numero" id="">-->
<!---->
<!--        <br>-->

</body>
</html>