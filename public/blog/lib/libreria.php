<?php

$posts = array();

$posts[] = array(
    'id' => '1',
    'titulo' => 'La torre Eiffel',
    'sumario' => 'La torre Eiffel​ es una estructura de hierro pudelado diseñada por los ingenieros Maurice Koechlin y Émile Nouguier.',
    'imagen' => '../../blog/img/Torre2.jpg',
    'categoria' => 'Cultura',
    'visitas' => '622',
    'valoracion' => '10',
);
$posts[] = array(
    'id' => '2',
    'titulo' => 'Ratatouille. Comida Francesa',
    'sumario' => 'Es una especialidad regional francesa elaborada con diferentes hortalizas guisadas. Proviene de la región de Provenza y del antiguo condado de Niza.',
    'imagen' => '../../blog/img/Rata.jpg',
    'categoria' => 'Comida',
    'visitas' => '1095',
    'valoracion' => '9',
);
$posts[] = array(
    'id' => '3',
    'titulo' => 'Museo Louvre Paris, Francia',
    'sumario' => 'El Museo del Louvre (Musée du Louvre, en francés) es el museo nacional de Francia consagrado al arte anterior al impresionismo, tanto bellas artes como arqueología y artes decorativas. Es uno de los más importantes del mundo.',
    'imagen' => '../../blog/img/Louvre.jpg',
    'categoria' => 'Cultura',
    'visitas' => '511',
    'valoracion' => '8',
);
$posts[] = array(
    'id' => '4',
    'titulo' => 'El Rio Sena de Francia',
    'sumario' => 'El río Sena (en francés, Seine) es un curso de agua europeo de la vertiente atlántica que discurre únicamente por Francia. Con una longitud de casi 776 km es el tercero más largo del país. ',
    'imagen' => '../../blog/img/Rio.jpg',
    'categoria' => 'Paisajes',
    'visitas' => '197',
    'valoracion' => '9',
);

function obtenerPost($id) {
  global $posts;
  $temp = '';

  foreach ($posts as $item) {
    if ($item['id'] == $id) {
      $temp = $item;
      continue;
    }
  }

  return $temp;
}
