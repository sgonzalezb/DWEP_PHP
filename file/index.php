<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <form method="POST" enctype="multipart/form-data" style="text-align: center;">
            <input type="file" name="file1">
            <input type="file" name="file2">
            <input type="submit" name="submit">
        </form>

    <?php
        foreach($_FILES as $file) {
            print_r("Nombre del archivo: ".$file['name']);
            echo'<br>';
            print_r("Tipo de archivo: ".$file['type']);
            echo'<br>';
            print_r("Tamaño del archivo: ".$file['size']);
            echo'<br>';
            print_r("Ruta del archivo".$file['tmp_name']);
            echo'<br>';
            print_r("Error del archivo".$file['error']);
            echo'<br>';
        }        
    ?>
</body>
</html>