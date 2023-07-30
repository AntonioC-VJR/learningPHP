<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1> Teste de Tipos Primitivos </h1>
    <?php 

        // 0x = Hexadecimal 0b = Binário 0 = Octal
        $num = 0;
        echo "O valor da variavel é: $num";

        echo "<br>";

        $v = 300;
        var_dump($v);
        

        echo "<br>";

        $v = 4e2; // 4 x (10 elevado a 2)
        var_dump($v);

        echo "<br>";

        $num2 = "950";
        var_dump($num2);

        echo "<br>";

        $casado = true;
        var_dump($casado);

        print " O valor para casado é: $casado";


        echo "<br>";

        $vet = [2,2.5,6,"Maria",false];
        var_dump($vet);

        echo "<br>";

        class Pessoa {

            private string $nome;

        }

        $p = new Pessoa;
        var_dump($p); 

    ?>
</body>
</html>