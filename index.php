<?php
/* a tag <?php indica o início de um bloco de código php
para ser interpretado no servidor */
    $none = "Gabriel Antonio Andrighetto"; //cria uma string
    echo "Minha primeira página PHP<br>"; // exibe o conteúdo em html
    echo $none . '<br>'; // exibe o conteúdo em string

    $natural = 1234;
    $inteiro = -234;
    echo $natural + $inteiro . '<br>'; #soma
    echo $natural - $inteiro . '<br>'; #subtração
    echo $natural * $inteiro . '<br>'; #multiplicação
    echo $natural / -($inteiro) . '<br>'; #divisão, inversão de valor

    $octal = 0234; # inteiro na base octal-simbolizado pelo 0 equivale a 156 decimal 
    $hexadecimal = 0x34; # inteiro na base hexadecimal(simbolizado pelo 0x) - equivale a 52 decimal

    $float = 1.234; #float
    echo 10**4 . "<br>"; #exponenciação
    $floatE = 23e4; # equivale a 230.000, 23 * 10^4 

//strings
    echo "As aspas duplas permitem usar as variáveis por exemplo \$none: $none <br>";
    echo '\none'; #tudo é texto
    echo 1 . 2 . 3 . ' numeros ' . $none; #concatenação
/* caracteres de escape: 
    \n Nova linha
    \r Retorno de carro (semelhante a \n)
    \t Tabulação horizontal
    \\a própria barra (\)
    \$0 simbolo $
    \' Aspa simples
    \" Aspa dupla
*/

//estruturas de dados 
    echo "<br>";
    $array = [1,2,3,4]; # vetor de inteiros
    var_dump($array); #função que exibe os valores de determinada váriavel
    echo "<br>" . $array[0] . "<br>";
    $dicionario = ['A' => 1, 'B' => 2, 'C' => 3, 'D' => 4];
    var_dump($dicionario);
    echo "<br>" . $dicionario["B"] . "<br>";
?>

<!--https://dontpad.com/aulasCVD-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora em PHP</title>
</head>
<body>
    <h2>Calculadora Simples</h2>

    <form action="controller.php" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" step="any" required><br><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" step="any" required><br><br>

        <label for="operacao">Operação:</label>
        <select name="operacao" required>
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select><br><br>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>