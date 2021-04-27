<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello world</title>
</head>
<body>
<h1>
    <?php

    echo "hello world";

    ?>
</h1>
<p>
    <?php
        $nome = 'ranieri';
        // echo 'o professor é ' . $nome; // "." é o operador de concatenação
        echo "o professor é $nome";
    ?>
</p>

<ul>
<?php
    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) {
?>

            <li>
                <strong>

                    <?php echo $i ?>

                </strong>
            </li>

<?php
        } else {
?>

            <li>
                <?php echo $i ?>
            </li>

<?php
        }
    }
?>
</ul>



<ul>
    <?php for ($i = 0; $i < 10; $i++): ?>
        <?php if ($i == 5): ?>
            <li>
                <strong><?= $i ?></strong>
            </li>
        <?php else: ?>
            <li>
                <?= $i ?>
            </li>
        <?php endif ?>
    <?php endfor ?>
</ul>

</body>
</html>