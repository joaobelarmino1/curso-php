<?php

$idade = 16;
$numeroPessoas = 2;
echo "Você só pode entrar se tiver 18 anos ou mais, ou, se tiver 16 anos e estiver acompanhado.\n";

if($idade >= 18){
  echo "Você tem $idade anos. Pode entrar.";
}else if($idade >=16 && $numeroPessoas > 1){
  echo "Você está acompanhado e pode entrar!";
  }else{
    echo "Você não pode entrar!";
  }
echo "\n";
$mensagem = $idade > 18 ? "Parabens, vc é adulto" : "Você é novo!";
echo $mensagem;

?>