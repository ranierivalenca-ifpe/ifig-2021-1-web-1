# Tipos de dados e arrays

## Tipos de dados em PHP

PHP possui oito tipos de dados primitivos:
- [boolean](https://www.php.net/manual/pt_BR/language.types.boolean.php) - valor booleano [true  false]
- [integer](https://www.php.net/manual/pt_BR/language.types.integer.php) - valores inteiros (incluindo dados *long*)
- [float](https://www.php.net/manual/pt_BR/language.types.float.php) - valores de ponto flutuante (incluindo dados *double*)
- [string](https://www.php.net/manual/pt_BR/language.types.string.php) - sequências de caracteres
- [array](https://www.php.net/manual/pt_BR/language.types.array.php) - um agrupamento de dados, de qualquer tipo
- [object](https://www.php.net/manual/pt_BR/language.types.object.php) - objetos
- [callable](https://www.php.net/manual/pt_BR/language.types.callable.php) - funções
- [resource](https://www.php.net/manual/pt_BR/language.types.resource.php) - recursos externos
- [null](https://www.php.net/manual/pt_BR/language.types.null.php) - tipo nulo


## Arrays em PHP

Em PHP, arrays podem ser declarados usando a função `array()` ou utilizando os tradicionais colchetes (`[]`). O exemplo a seguir declara dois arrays, nas duas sintaxes:
```php
<?php
  $gastos = array(
    'combustível', // índice 0
    'diária',      // índice 1
    'almoço',      // índice 2
    'jantar'       // índice 3
  );

  $valores = [
    200, // índice 0
    200, // índice 1
    100, // índice 2
    120  // índice 3
  ];
?>
<h1>Gastos com a viagem</h1>
<h2>Tipos</h2>
<ul>
  <?php for ($i = 0; $i < sizeof($gastos); $i++): ?>
    <li><?= $gastos[$i] ?></li>
  <?php endfor ?>
</ul>
<h2>Valores</h2>
<ul>
  <?php foreach ($valores as $valor): ?>
    <li><?= $valor ?></li>
  <?php endforeach ?>
</ul>
```

O exemplo anterior mostra também como é possível *ler* os dados de um array, utilizando os operadores `[]`, e como contar o número de elementos de um array, utilizando a função `sizeof()` (funções serão melhor descritas a seguir). Neste exemplo também é mostrada a estrutura de controle **`foreach`**, extremamente importante no PHP. O `foreach` substitui, de certa forma, o `for`, na medida que lê cada elemento do array e coloca-o dentro de uma variável. No exemplo, cada um dos valores dentro da variável `$valores` é colocado na variável `$valor`, que existe dentro do contexto da estrutura de controle. Os dois exemplos a seguir geram exatamente o mesmo resultado:
```php
<?php
$numeros = [1, 1, 2, 3, 5, 8];

for ($i = 0; $i < sizeof($numeros); $i++) {
  $numero = $numeros[$i];
  echo "[$numero]";
}
echo PHP_EOL; // imprime uma linha em branco
foreach($numeros as $numero) {
  echo "[$numero]";
}

 ?>
```

Neste caso, o `foreach` terá um comportamento bastante similar ao `for` apresentado, criando uma variável `$numero` para cada elemento do array `$numeros`.

PHP também aceita arrays *indexados*, onde os índices podem ser inteiros ou strings. Para declarar um array indexado, utilizamos o operador `=>`, conforme o exemplo a seguir:
```php
<?php
$herois = [
  'Iron Main' => 'Tony Esterco',
  'Hook' => 'Bruce Gancho',
  'Gavião Roqueiro' => 'Clin Tim Barton'
];

echo "<ul>";
foreach ($herois as $nomeDeHeroi => $nomeReal) {
  echo "<li>$nomeReal é $nomeDeHeroi</li>";
}
echo "</ul>";
?>
```

Neste exemplo vemos também como `foreach` pode ser utilizado para navegar por arrays indexados, tendo acesso também ao seu índice. A cada iteração do `foreach`, o índice é colocado na variável `$nomeDeHeroi` o valor respectivo é colocado na variável `$nomeReal`.

## Verificando o conteúdo de variáveis

A função `echo` é utilizada para escrever o conteúdo de variáveis, mas é diferente da função `console.log()` do JavaScript. Enquanto esta escreve o conteúdo de qualquer tipo de dados, a função `echo` escreve apenas o conteúdo de tipos de dados simples:
```php
<?php
$string = 'nome';
$numero = 1101;
$float = 1.92;
$array = [1, 1, 2, 3, 5, 8, 11];

echo $string . PHP_EOL; // imprime "nome\n" =)
echo $numero . PHP_EOL; // imprime "1101\n" =)
echo $float . PHP_EOL; // imprime "1.92\n" =)
echo $array . PHP_EOL; // imprime "array\n"  =(
?>
```

Para escrever o conteúdo de arrays e objetos, podemos utilizar as funções `print_r()` ou `var_dump()`:
```php
<?php
$array = [1, 1, 2, 3, 5, 8, 11];

print_r($array);
/*
Array
(
    [0] => 1
    [1] => 1
    [2] => 2
    [3] => 3
    [4] => 5
    [5] => 8
    [6] => 11
)
*/

var_dump($array);
/*
array(7) {
  [0]=>
  int(1)
  [1]=>
  int(1)
  [2]=>
  int(2)
  [3]=>
  int(3)
  [4]=>
  int(5)
  [5]=>
  int(8)
  [6]=>
  int(11)
}
*/
?>
```

Enquanto `print_r()` imprime os dados de uma forma mais simplificada e mais fácil de ser entendida, ela dá menos detalhes sobre o conteúdo do array. Por isso, é importante ter ciência da função `var_dump()` e de como utilizá-la.


## Arrays multidimensionais e tabelas

Arrays em PHP são naturalmente heterogêneos - ou seja, um array pode conter dados de diversos tipos distintos, ao mesmo tempo, como no exemplo abaixo:
```php
<?php
$data1 = ["tony", "stark", 1970, true];
$data2 = ["stephen", "strange", 1930, false];
?>
```

E, como esperado, também é possível que os dados de um array sejam arrays:

```php
<?php
$row1 = ["tony", "stark", 1970, true];
$row2 = ["stephen", "strange", 1930, false];

$data = [$row1, $row2];
?>
```

Esses arrays, que contém arrays como valores, são chamados de arrays multidimensionais. Quando é preciso ler o conteúdo de um array multidimensional, é importante ficar atento ao fato de que suas variáveis também são arrays:
```php
<?php
$data = [
  ["tony", "stark", 1970, true],
  ["stephen", "strange", 1930, false]
];

foreach($data as $row) { // cada elemento do array $data será colocado em $row
  // como os elementos de $data são arrays, então $row é um array
  foreach($row as $part) { // como $row é um array, podemos fazer um foreach nele
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
  <?php foreach($data as $i => $row): ?>
    <tr>
      <?php foreach($row as $part): ?>
        <td><?= $part ?></td>
      <?php endforeach ?>
    </tr>
  <?php endforeach ?>
</table>
```

Assim como em outras linguagens de programação, em PHP também é possível construir e trabalhar com arrays

# Referências e mais conteúdos

- https://www.php.net/manual/pt_BR/language.types.array.php
