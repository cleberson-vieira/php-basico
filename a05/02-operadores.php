<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Aritmeticas</title>
</head>
<body>
    <h2>Operações Aritméticas</h2>
    <?php 
        // Ordem de Precedência dos operadores
        //1º - () -> Parênteses
        //2º - *, /, % -> Multiplicação, Divisão e Módulo (Resto da Divisão)
        //3º - +, - -> Adição e Subtração
        $n1 = 3;
        $n2 = 2;
        $m = ($n1 + $n2) / 2;

        echo "A soma entre $n1 e $n2 é igual a " . ($n1 + $n2) . "<br>";
        echo "A subtração entre $n1 e $n2 é igual a " . ($n1 - $n2) . "<br>";
        echo "A multiplicação entre $n1 e $n2 é igual a " . ($n1 * $n2) . "<br>";
        echo "A divisão entre $n1 e $n2 é igual a " . ($n1 / $n2) . "<br>";
        echo "O módulo entre $n1 e $n2 é igual a " . ($n1 % $n2) . "<br>";
        echo "A média entre $n1 e $n2 é igual a " . $m . "<br>";
    ?>
</body>
</html>