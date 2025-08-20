<?php
date_default_timezone_set('America/Sao_Paulo');

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

$arrInfos = [
  "Nome:".$nmPessoa,
  "Idade:".$strIdade,
  "Genero:".$flGenero, 
  "Idade daqui 10 anos:".$nrIdadeDez, 
  "IP:".$_SERVER["SERVER_ADDR"], 
  "User Agent:".$_SERVER["HTTP_USER_AGENT"],
  "Data e Hora:".$dataHora];


echo json_encode($arrInfos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);