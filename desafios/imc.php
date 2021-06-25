<?php
$peso = 67.24;
$altura = 1.75;

$imc = $peso / ($altura**2);
if($imc < 18.5){
  echo "IMC: $imc. Você está abaixo do peso.";
}else if($imc >= 18.5 && $imc <= 24.5){
  echo "IMC: $imc. Você está com o peso ideal.";
}else if($imc >=25.0 && $imc <= 29.9){
  echo "IMC: $imc. Você está com sobrepeso.";
}else{
  echo "IMC: $imc. Você está com obesidade mórbida! :(\nProcure um médico.";
}