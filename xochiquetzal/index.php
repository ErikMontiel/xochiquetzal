<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xochiquetzal</title>

    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <?php require_once "app/config.php"?>
    <?php require_once "app/dependencias.php"?>
    <link rel="manifest" href="manifest.json">
 
</head>
<body>
    <?php
        if(isset($_GET['home'])){
            $direccion = explode('/', $_GET['home']);
            switch($direccion[0]){

                case 'vista':{
                    require_once 'view/vista.php';
                break;
                }

                default:{
                    require_once 'view/404.php';
                break;
                }
                
            }
        }else{
            require_once 'view/vista.php';
        }
    ?>
</body>
</html>

<script src="script.js"></script>