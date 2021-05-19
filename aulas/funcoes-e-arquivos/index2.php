<?php

$lines = file('festa.csv'); // cada linha do arquivo
// cada linha tem uma série de dados separados por ';'

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  table, tr, td, th {
    border: 1px solid hsl(0, 0%, 50%);
    border-collapse: collapse;
  }
  td, th {
    padding: 0.5em;
  }
  </style>
</head>

<body>
  <table>
    <?php foreach ($lines as $linha => $line) : ?>
      <tr>
        <?php
          $dados = explode(";", $line); // array com as partes da linha
        ?>
        <?php foreach ($dados as $dado) : ?>
          <?php if ($linha == 0): ?>
            <th><?= $dado ?></th>
          <?php else: ?>
            <td><?= $dado ?></td>
          <?php endif ?>
        <?php endforeach ?>
      </tr>
    <?php endforeach ?>
  </table>
</body>

</html>