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
        $cambio = $_POST["cambio"] ?? "";

        $calculo = "0";

    ?>

    <main class="principal">
        
        <h1> Conversor de Moedas </h1>   
        <form method="post" action="conv_avancado.php">
            <label> Valor em Reais: </label>
            <input type="number" value="0" name="valor" class="info">  
            
            <label> Escolha Cambio </label>
            <select name="cambio">
                <option value="iene"> Iene </option>
                <option value="dolar"> Dólar </option>
                <option value="euro"> Euro </option>
            </select>

        <?php 
            if ($valor == ""){

                // echo '<p>' . 'Digitar um valor numérico - Valor vazio inválido' . '</p>';

                $calculo = "0";

                } else if($cambio == "dolar") {


                $calculo = $valor/4.85;

                } else if($cambio == "euro"){

                    $calculo = $valor/5.35;


                } else if($cambio == "iene"){

                    $calculo = $valor/0.39;

                }

        ?>
            <label> Convertendo para <?php echo $cambio; ?></label>
            <input type="text" value="<?php   echo number_format($calculo ?? "", 2); ?>" class="info">
            <input type="submit" class="botao" value="Calcular">

        </form>

    </main>
</body>
</html>