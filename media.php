<?php
 class Media {
public function calcularMedia($notas) {
 if (count($notas) === 0) {
return 0;
 }
$soma = 0;
 foreach ($notas as $nota) {
 $soma += $nota;
 }
 return $soma / count($notas);
 }
