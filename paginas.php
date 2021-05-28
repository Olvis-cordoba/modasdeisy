<?php
include("configuracion.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Modas deisy</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo RAIZ ?>css/style.css"> 
        <?php include './inc/link.php'; ?>
    </head>
    <body id="container-page-index">
                       <?php
                       include './inc/navbar.php';
                       include 'library/configServer.php';
                       include 'library/consulSQL.php';

                        $menu = $mods[MODULO][ACCION];
                        $archivo = $menu["archivo"];
                        include($archivo);
                        ?>    
    </body>
</html>
