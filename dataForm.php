<?php
$nombre     = $_REQUEST['nombre'];
$clave      = $_REQUEST['clave'];
echo $codigo = $_REQUEST['codigo'];



echo '<br>Nombre:  '. $nombre . ' Clave: ' .$clave;
echo '<br><br><br><br>';

foreach ($_POST as $i => $value)
{
  echo 'Valores Recibidos '. $i. ':' .$value.'<br>';
} 


?>
