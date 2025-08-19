<?php

$nmPessoa = $_POST['nome'];
$strIdade = $_POST['idade'];
$flGenero = $_POST['genero'];
$dataHora = date("d/m/y H:i:s");



if( is_float($strIdade)) {
  echo "Numero não Inteiro. \n";
} else{
  echo "Numero inteiro.\n";
}



$nrIdadeDez = $strIdade + 10;

$strMaiorIdade = "";

if($nrIdade >= 18){
  $strMaiorIdade = "Maior de idade";
} else{
  $strMaiorIdade = "Menor de idade";
}

echo "teste \n";
echo $nmPessoa."\n";
echo $nrIdade."\n";
echo $flGenero."\n";
echo $nrIdadeDez."\n";
echo $strMaiorIdade."\n";
echo $_SERVER["SERVER_ADDR"]."\n";
echo $_SERVER["HTTP_USER_AGENT"]."\n";
echo $dataHora."\n";
