<?php

// $fp = fopen('novo-arquivo.txt', 'w'); // file pointer
// for ($i = 0; $i < 10; $i++) {
//   fwrite($fp, "Hello my little file $i\n");
// }

$fp = fopen('novo-arquivo.txt', 'r');

// echo filesize('novo-arquivo.txt');
// echo fread($fp, filesize('novo-arquivo.txt') / 2);
// for ($i = 0; $i < 3; $i++) {
//   $line = fgets($fp);
//   var_dump($line);
//   // var_dump(stripos($line, '2'));
// }

// $lines = [];
// while (true) {
//   $line = fgets($fp);
//   if ($line === false) { // condição de saída do laço
//     break;
//   }
//   $lines[] = $line;
// }

// var_dump($lines);

$lines = file('novo-arquivo.txt');
var_dump($lines);

?>