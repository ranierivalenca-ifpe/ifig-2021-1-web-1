<?php

function checar_estado($nota) {
  if ($nota >= 6) {
    echo "ok";
  } else if ($nota >= 2) {
    echo "tá quase";
  } else {
    echo "lascou-se";
  }
}

function soma($arr) {
  $s = 0;
  foreach($arr as $el) {
    $s += $el;
  }
  return $s;
}

function media($arr) {
  return soma($arr) / sizeof($arr);
}

$notas = [2, 5, 9, 10, 1, 0, 5, 6, 7, 8, 4, 3];

foreach($notas as $nota) {
  checar_estado($nota);
}

$s = 0;
foreach($notas as $nota) {
  $s += $nota;
}
$m = $s / sizeof($notas);

echo $m; // média das notas

echo media($notas);

// ...

echo $m; // média das notas
echo media($notas2);


function execucao_medida($function) {
  $t0 = microtime(true);
  $function();
  $t = microtime(true);
  echo ($t - $t0);
}

$fn = function () {
  echo "Hello";
};

execucao_medida($fn);

function map($callable, $array) {
  $ret = [];
  foreach($array as $el) {
    $ret[] = $callable($el);
  }
  return $ret;
}

function convert_to_code($string) {
  $ret = array();
  for ($i = 0; $i < strlen($string); $i++) {
    $ret[] =  ord($string[$i]);
  }
  return $ret;
}

$codes = convert_to_code('Ranieri Valenca');

foreach($codes as $code) {
  echo chr($code + 3);
}

?>