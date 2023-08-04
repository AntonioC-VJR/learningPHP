<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Conversor de Moedas</title>
</head>
<body>

    <?php 

        $valor = $_POST["valor"] ?? "0";

    ?>

    <main class="principal">
        
        <h1> Conversor de Moedas </h1>   
        <form method="post" action="conv_moedas.php">
            <label> Valor em Reais: </label>
            <input type="number" value="0" name="valor" class="info"> 

        <?php 
            if ($valor == ""){

                // echo '<p>' . 'Digitar um valor numérico - Valor vazio inválido' . '</p>';

                $calculo = "0";

                } else {


                $calculo = $valor/4.58;

                }
        ?>
            <label> Convertendo para Dólares:</label>
            <input type="text" value="<?php   echo number_format($calculo ?? "", 2); ?>" class="info">
            <input type="submit" class="botao" value="Calcular">

        </form>

    </main>
</body>
</html>