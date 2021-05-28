<?php

$mods = []; //Iniciar el arreglo (array)

$mods['inicio'] = [
    "inicio" => ["diseño" => "paginas", "archivo" => "modulos/inicio/index.php"],
];

$mods['quienessomos'] = [
    "inicio" => ["diseño" => "paginas", "archivo" => "modulos/quienessomos/index.php"],
];


$mods['producto'] = [
    "inicio" => ["diseño" => "paginas", "archivo" => "modulos/producto/index.php"],
        
];
$mods['mis-pedidos'] = [
    "inicio" => ["diseño" => "paginas", "archivo" => "modulos/mis-pedidos/index.php"],
    "ver-factura" => ["diseño" => "pagina-libre", "archivo" => "modulos/administracion/ver-factura.php"],
];

$mods['basicos'] = [
    "inicio" => ["diseño" => "paginas", "archivo" => "modulos/basicos/index.php"],
       
];

$mods['administracion'] = [
    "inicio" => ["diseño" => "paginas", "archivo" => "modulos/administracion/index.php"],
    
    "reporte_clientes" => ["diseño" => "pagina-libre", "archivo" => "modulos/administracion/reporte_clientes.php"],
    "reporte_productos" => ["diseño" => "pagina-libre", "archivo" => "modulos/administracion/reporteproductos.php"],
    "reporte_proveedores" => ["diseño" => "pagina-libre", "archivo" => "modulos/administracion/reportesproveedores.php"],

    "reporte_pedidos" => ["diseño" => "pagina-libre", "archivo" => "modulos/administracion/reportespedidos.php"]       
];

$mods['registrarse'] = [
    "inicio" => ["diseño" => "paginas", "archivo" => "modulos/registrarse/index.php"],
       
];

$mods['confi-pedidos'] = [
    "inicio" => ["diseño" => "paginas", "archivo" => "modulos/confi-pedidos/index.php"],
       
];
