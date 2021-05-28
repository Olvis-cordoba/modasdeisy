<section id="form-registration">
      <div class="container">
        <div class="row">
          <div class="page-header">
           <h1>MISIÓN / VISIÓN</h1>
      </div>
      <div class="col-xs-12 col-sm-5 text-center">
        <br><br><br>
            <br>
            <img src="assets/img/mision.jpg" alt="Misión" class="img-responsive">
        </div>
        <div class="col-xs-12 col-sm-7">
        <br><br>
          <div id="container-form" style="background:#FFFFFF">
        <?php
              
               $consulta= ejecutarSQL::consultar("SELECT TRIM(descripcion) AS descripcion FROM contenido WHERE id='1'");
               $totalproductos = mysql_num_rows($consulta);
              if($totalproductos>0){
              $fila=mysql_fetch_array($consulta);
               echo '<p style="color:#fff;  font-size:25px;" class="text-center lead">'.$fila['descripcion'].'</p>';   
              } 
            ?> 
            </div> 
            </div>
            </div>
        </div>
        <div class="container">
        <div class="row">
          <div class="page-header">
      </div>
      <div class="col-xs-12 col-sm-5 text-center">
        <br><br><br>
            <br>
            <img src="assets/img/vision.jpg" alt="Visión" class="img-responsive">
        </div>
        <div class="col-xs-12 col-sm-7">
        <br><br>
          <div id="container-form" style="background:#FFFFFF">
            <?php
               $consulta= ejecutarSQL::consultar("SELECT TRIM(descripcion) AS descripcion FROM contenido WHERE id='2'");
               $totalproductos = mysql_num_rows($consulta);
              if($totalproductos>0){
              $fila=mysql_fetch_array($consulta);
               echo '<p style="color:#fff;  font-size:25px;" class="text-center lead">'.$fila['descripcion'].'</p>';   
              } 
            ?> 
            </div> 
            </div>
            </div>
        </div>
    </section> 