<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

 $nombre= $_POST["nombre"];
 $numpas= $_POST["numpas"];
 $valorpas= $_POST["valorpas"];
 $ditancia= $_POST["ditancia"];
 $velocidad= $_POST["velocidad"];

 $totalpagar= $numpas * $valorpas;
 $horas = $ditancia / $velocidad;

 echo "<p><strong>Nombre: <strong>$nombre<p>";
 echo "<p><strong>Numero de pasajeros: <strong>$numpas<p>";
 echo "<p><strong>Total ganado: <strong>$totalpagar<p>";
 echo "<p><strong>Distancia recorrida: <strong>$horas<p>";
}
?>