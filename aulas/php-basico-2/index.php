<?php
$data = [
  ["tony", "stark", 1980, true],
  ["stephen", "strange", 1930, false],
  ["ranieri", "valenca", "???", false],
  ["ranieriiii", "valenca", "??????", true],
];

foreach ($data as $row) { // cada elemento do array $data será colocado em $row
  // como os elementos de $data são arrays, então $row é um array
  foreach ($row as $part) { // como $row é um array, podemos fazer um foreach nele
    // ...
  }
}
?>
<table>
  <tr>
    <th>Nome</th>
    <th>Sobrenome</th>
    <th>Nascimento original</th>
    <th>Pertence aos vingadores originais</th>
  </tr>
  <?php foreach ($data as $i => $row) : ?>
    <tr>
      <?php foreach ($row as $part) : ?>
        <td><?= $part ?></td>
      <?php endforeach ?>
    </tr>
  <?php endforeach ?>
</table>