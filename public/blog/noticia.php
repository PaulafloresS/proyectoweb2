<?php
require 'lib/libreria.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  //header = redirecciona a la url colocada dentro de la funcion 
  header("location:index.php");
 
}

$item = readRegistro($id);
if(!$item){
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Blog Francia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    <link href="css/noticia.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <div id="main">
      <div id="header"></div>
      <div id="content">
        <div class="section">
          <?php
          if ($noticia) {
            if ($noticia['valoracion'] == 0) {
              $valoracion = 'Sin calificar';
            } else {
              $valoracion = $noticia['valoracion'] . ' / 10';
            }
            ?>
            <div class="box-title">
              <h1><?php echo $noticia['titulo']; ?></h1>            
            </div>
            <div class="box-image">
              <img src="img/<?php echo $noticia['imagen']; ?>" alt="<?php echo $noticia['titulo']; ?>" width="627" />
            </div>
            <div class="box-data">
              <div class="data-left">
                <span>Leído <?php echo $noticia['visitas']; ?> veces</span>
              </div>
              <div class="data-right">
                <span>Calificación: <?php echo $valoracion; ?></span>
              </div>
              <div class="clear"></div>
            </div>
            <div class="article">
              <p><?php echo $noticia['sumario']; ?></p>
            </div>
            <?php
          }
          ?>
          <div class="box-return">
            <a href="index.php" title="Volver al Inicio">Volver</a>
          </div>
        </div>
        <div class="aside">
          <div class="publicidad">
            <img src="../blog/img/publicidad1.jpg" alt=""/>
          </div>
          <div class="publicidad">
            <img src="../blog/img/publicidad2.jpg" alt=""/>            
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div id="footer"></div>
    </div>
  </body>
</html>
