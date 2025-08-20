<?php
date_default_timezone_set('America/Sao_Paulo');

$action = $_POST['action'];
$nrNota1 = $_POST["nota1"];
$nrNota2 = $_POST["nota2"];
$nrNota3 = $_POST["nota3"];
$nrNota4 = $_POST["nota4"];  
$nrAltura = $_POST["altura"];
$nrPeso = $_POST["peso"];
$dtAlvo = $_POST["dataAlvo"];
$hrAlvo = $_POST["horaAlvo"];



if($action == "calcularMedia"){
  $strSituacao ="";
  $nrNotaMinima = 0;
 
  $media = ($nrNota1+$nrNota2+$nrNota3+$nrNota4)/4;
  if($media >= 7){
    $strSituacao = "Aprovado.";
  } else if($media >= 5){
    $nrNotaMinima = 14 - $media;
    $strSituacao = "Recuperação.";
  } else{
    $strSituacao = "Reprovado.";
  }

  $nrNotas = [$nrNota1, $nrNota2, $nrNota3, $nrNota4];
  $maiorNota = max($nrNotas);
  $menorNota = min($nrNotas);

  $arrInfosNotas = [
    'media' => utf8_encode("Media: ".$media),
    'maior' => utf8_encode ("Maior Nota: ".$maiorNota),
    'menor' => utf8_encode ("Menor Nota: ".$menorNota),
    'situacao' => utf8_encode ("A situação é: ".$strSituacao)
  ];
  if($media < 7 && $media >= 5){
    $arrInfosNotas['notaMinima'] = $nrNotaMinima;
  }

  echo json_encode($arrInfosNotas);

} elseif($action == "calcularIMC"){
   $nrPesoIdeal  = 0;
   $strSituacao ="";
   $nrIMC = $nrPeso/($nrAltura*$nrAltura);
   if($nrIMC < 18.5){
      $strSituacao = "Abaixo do Peso";
     }elseif($nrIMC < 25){
      $strSituacao = "Peso Normal";
    } elseif($nrIMC < 30){
      $strSituacao = "Sobrepeso";
    } else{
      $strSituacao = "Obesidade";
    }
    
    $nrPesoIdeal = 22 * ($nrAltura ^ 2);

    $arrInfosIMC = [
      'imc' => utf8_encode("IMC : ".$nrIMC),
      'situacao' => utf8_encode ('Situacao: '.$strSituacao),
      'pesoIdeal' => utf8_encode ('Peso Ideal: '.$nrPesoIdeal)
    ];

    echo json_encode($arrInfosIMC);

  } elseif($action == "calcularDataRestante"){
    $dtHrAtual = new DateTime('now');
    $dataHoraAlvo = new DateTime($dtAlvo." ".$hrAlvo);
    $nrDiferencaDias = $dtHrAtual->diff($dataHoraAlvo);
    
    
  $arrInfosData = [
    'totalDias'=>  utf8_encode ($nrDiferencaDias -> days),
    'anos' =>  utf8_encode ($nrDiferencaDias -> y),
    'meses' =>  utf8_encode ($nrDiferencaDias -> m),
    'dias' =>  utf8_encode ($nrDiferencaDias -> d),
    'horas' =>  utf8_encode ($nrDiferencaDias -> h),
    'minutos' =>  utf8_encode ($nrDiferencaDias -> i),
    'segundos' =>  utf8_encode ($nrDiferencaDias -> s),
  
  ];
  if($dataHoraAlvo < $dtHrAtual){
    $arrInfosData['situacao'] = utf8_encode("A data informada já passou");
  };

  echo json_encode($arrInfosData);
}


