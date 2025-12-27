<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuição</title>
</head>
<body>
    <?php 
        // $c = $a + $b;
        // $c = $c + 5; -> $c += 5;
        // $b = $b + $a; -> $b += $a;
        // $a = $a + 1; -> $a += 1; -> $a++;

        // Peradores de Atribuição
        // Adição
        // $a = $a + $b -> $a += $b

        // Subtração
        // $a = $a - $b -> $a -= $b 

        // Multiplicação
        // $a = $a * $b -> $a *= $b 

        // Divisão
        // $a = $a / $b -> $a /= $b 

        // Módulo
        // $a = $a % $b -> $a %= $b 

        // Concatenação
        // $a = $a . $b -> $a .= $b 

        $preco = $_GET ["p"];
        echo " O preço do produto é R$ " . number_format($preco,2);
        //$preco = $preco + ($preco * 10/100);
        $preco += ($preco * 10/100);
        echo "<br>E o novo preço com 10% de aumento será R$ " . number_format($preco,2);
    ?>
</body>
</html>