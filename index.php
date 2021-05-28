<?php
include("configuracion.php");
//echo "<pre>";
///print_r($mods);
//print_r( $_SERVER);
$URL = $_SERVER['REQUEST_URI'];
//echo $URL;
$Parametros = explode('/', $URL);

define("RAIZ", "/" . $Parametros[1] . "/");

//print_r($Parametros);

if (isset($Parametros[2]) && $Parametros[2] != "") {
    define("MODULO", $Parametros[2]);
} else {
    define("MODULO", "inicio");
}

if (isset($Parametros[3]) && $Parametros[3] != "") {
    define("ACCION", $Parametros[3]);
} else {
    define("ACCION", "inicio");
}

$menu = $mods[MODULO][ACCION];

$diseno = $menu["diseño"];

define("RAIZ_MODULO", RAIZ . MODULO . "/");

switch ($diseno) {
    case "paginas":
        include("paginas.php");
        break;

    case "sin-menu":
        include("sin-menu.php");
        break;

    case "pagina-libre":
        include("pagina-libre.php");
        break;
}