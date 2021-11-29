<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contactos</title>
</head>
<body>
    <?php
    
        if (isset($_GET['agenda'])) {
            $agenda = $_GET['agenda'];
        } else {
            $agenda = array();
        }

        

        if (isset($_GET['submit'])) {
            
            $nombre = filter_input(INPUT_GET,'nombre');
            $numero = filter_input(INPUT_GET,'numero');
    
            if (empty($nombre) | empty($numero)) {
                echo "<p style='color:red'> Rellene los dos campos</p>";
                unset($nombre);
                unset($numero);
            }else {
                $agenda[$nombre] = $numero;
            }
            
        }
        ?>


        <h2>Agregar contacto</h2>

        <form>
            <?php
            
            foreach($agenda as $name => $tel) {
                echo'<input type="hidden" name="agenda['.$nom.']" value="'.$tel.'" />';
            }
            
            ?>


        <label for=""><input type="text" name="nombre"></label>
        <label for=""><input type="text" name="numero"></label>
        <input type="submit" name='submit' value="Ejecutar"/><br />
        </form>



        <h2>Agenda</h2>
        <?php
        
        
        if (count($agenda) == 0) {
            echo '<p>No hay contactos</p>';
        }else{
            echo'<ul>';
            foreach($agenda as $key => $value){
                echo "<li>".$key." : ".$value."</li>";
            }
            echo'</ul>';
        }
        
        ?>

</body>
</html>