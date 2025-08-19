<?php

$action = $_POST['action'];
$nrNota1 = $_POST["nota1"];
$nrNota2 = $_POST["nota2"];
$nrNota3 = $_POST["nota3"];
$nrNota4 = $_POST["nota4"];  


if($action == "calcularMedia"){
 
  $media = ($nrNota1+$nrNota2+$nrNota3+$nrNota4)/4;
  if($media >= 7){
    echo "Aprovado. \n";
  } else if($media >= 5){
    echo "Recuperação. \n";
  } else{
    echo "Reprovado \n";
  }
  echo $media;
}