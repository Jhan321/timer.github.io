<?php
 $date = new DateTime('now', new DateTimeZone('America/Bogota'));
 echo $date->format('m-d-Y/H:i:s');
?>