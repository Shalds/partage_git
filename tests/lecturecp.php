<?php

$monfichier = fopen('compteur.txt', 'r+');

$pages_vues = fgets($monfichier);
$pages_vues += 1;
fseek($monfichier, 0);
fputs($monfichier, $pages_vues);

fclose($monfichier);

echo '<p>Cette page a été vue ' . $pages_vues . ' fois ! </p>'
 ?>
