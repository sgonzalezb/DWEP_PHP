<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda con sesiones</title>
</head>
<body>

<?php

    session_start(['cookie_lifetime' => 86400]);

    if (!isset($_SESSION['agenda'])) {
        $_SESSION['agenda'] = array();
    };

    if (isset($_REQUEST['submit'])) {
        $name = trim($_REQUEST['name']);
        $phone = $_REQUEST['phone'];

        if (empty($name) | empty($phone)) {
            echo "<p style='color:red'> Rellene los dos campos</p>";
        }else{
            $_SESSION['agenda'][$name] = $phone;
        }
    }
?>

    <h2>Nuevo contacto</h2>
    <form method="GET">
        <label>Nombre:<input type="text" name="name"/></label>
        <label>Teléfono:<input type="text" name="phone"/></label>
        <input type="submit" name='submit' value="Ejecutar"/>

    </form>

    <h2>Agenda</h2>
    <?php
    $agenda = $_SESSION['agenda'];
    if (count($agenda) == 0) {
        echo'<p>No hay contactos en la agenda</p>';
    } else {
        echo'<ul>';

        foreach ($agenda as $key => $value) {
            echo'<li>'.$key.' : '.$value.'</li>';
        }


        echo'</ul>';
        
    }
    
    ?>

</body>
</html>