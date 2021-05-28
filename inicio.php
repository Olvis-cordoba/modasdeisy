<div class="jumbotron" id="jumbotron-index">
      <h1><span class="">Modas Deisy </span> <small style="color: #fff;"></small></h1>
      <p>
          Bienvenido a nuestra tienda , aquí encontrara una gran variedad de ropa pa damas,caballeros y niños.
      </p>
    </div>
     <style>
      .thumbnail{    
        height: 520px;
        width: 300px;
      }
     </style>

   </style>
    <section id="new-prod-index">
     <div class="container">
        <div class="page-header">
        <h1>Novedades <small>productos</small></h1>
        </div>
        <div class="row">
            <?php
               
               $consulta= ejecutarSQL::consultar("select * from producto where Stock > 0 limit 6");
               $totalproductos = mysql_num_rows($consulta);
              if($totalproductos>0){
               while($fila=mysql_fetch_array($consulta)){
               echo '
               <div class="col-xs-12 col-sm-6 col-md-4">
               <div class="thumbnail">
               <img src="assets/img-products/'.$fila['Imagen'].'">
               <div class="caption">
               <h3>'.$fila['NombreProd'].'</h3>
               <p>'.$fila['Descripcion'].'</p>
               <p>$'.$fila['Precio'].'</p>
               <p>Unidades disponible: ' .$fila['Stock'].'</p>
               <p class="text-center">
               <a href="index.php?modulos=modulos/productos/detalles&CodigoProd='.$fila['CodigoProd'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
               </p>

               </div>
               </div>
               </div>     
               ';
              }   
              
              }else{
               echo '<h2>No hay productos registrados en la tienda</h2>';
              }  
            ?>  
        </div>
      </div>
    </section>