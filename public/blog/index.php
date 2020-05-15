<?php
require '../blog/lib/config.php';
require '../blog/lib/funciones.php';

$posts = readTable();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Blog Francia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <div id="main">
      <div id="header"></div>
      <div id="content">
        <div class="section">
          <?php
          foreach ($posts as $item) {
            if ($item['valoracion'] == 0) {
              $valoracion = 'Sin calificar';
            } else {
              $valoracion = $item['valoracion'] . ' / 10';
            }
            ?>
            <div class="box-news">
              <a href="noticia.php?id=<?php echo $item['id']; ?>" title="<?php echo $item['titulo']; ?>">
                <div class="box-image">
                  <img src="img/<?php echo $item['imagen']; ?>" alt="<?php echo $item['titulo']; ?>"/>
                </div>
                <div class="box-text">
                  <h2><?php echo $item['titulo']; ?></h2>
                  <span class="category"><?php echo $item['categoria']; ?></span>
                  <p><?php echo $item['sumario']; ?></p>
                </div>
                <div class="box-rating">
                  <span class="view"><?php echo $item['visitas']; ?></span>
                  <span class="rating"><?php echo $valoracion; ?></span>
                </div>
              </a>
            </div>
            <?php
          }
          ?>
        </div>
      </div>
      <div id="footer"></div>
    </div>
  </body>
</html>
