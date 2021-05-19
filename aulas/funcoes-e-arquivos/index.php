<?php
  $lines = file('novo-arquivo.txt');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  li {
    list-style: none;
  }
  li span {
    color: hsl(0, 0%, 50%);
    font-size: .75em;
  }
  li span::after {
    content: ':'
  }
  </style>
</head>

<body>
  <h1>Minha listinha de linhas do arquivo 'novo-arquivo.txt'</h1>
  <ul>
    <?php foreach ($lines as $key => $line) : ?>
      <li><span><?= $key ?></span> <?= $line ?></li>
    <?php endforeach ?>
  </ul>
</body>

</html>