<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    
    <?php

        $nome = "Antonio";

        //Com double quoute Interpreta
        echo "Olá $nome \u{1F596}";

        echo "<br>";

        //Com single quoute Não Interpreta
        echo 'Olá $nome';

        echo "<br>";

        //Echo não interpreta Constante
        const ESTADO = "SP";
        echo "Moro no ESTADO";

        echo "<br>";
        //Usar concatenacao
        echo "Moro no: " . ESTADO;

        echo "<br>";

        echo "Estamos no ano de: " . date('Y');

        echo "<hr>";

        $nome = "Rodrigo";
        $snom = "Nogueira";


        // echo ("$nome . "Minotauro" . $snom");
        //echo '$nome "Minotauro" $snom';
        echo "$nome \"Minotauro\" $snom";

        echo "<br>";

        $var1 = "Antonio";
        $var2 = "Peso-Pesado";
        $var3 = "Junior";

        echo "$var1 \"$var2\" $var3";

        echo "<br>";

        echo "$var1 \t $var2 \t $var3";


        echo "<hr>";


        // Heredoc

        $curso = "PHP";
        $ano = date('Y');

        echo <<< FRASE
            Estou estudando 
                $curso em $ano
        FRASE;

        echo "<br>";

        echo <<< 'TESTE'

            Estou estudando 

            $curso em $ano


        TESTE;
        
    ?>
</body>
</html>