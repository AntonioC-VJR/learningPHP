<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <style> 

        body{

            background-color: #ccc;
            display: flex;
            flex-direction: row;

        }


        .operadores {

            width: 400px;
            height: auto;
            margin: 50px;

            background-color: white;
            outline: 1px solid black;

            box-shadow: 2px 2px 2px black;

            display: flex;
            flex-direction: column;

        }

        .operadores h1{

            color: green;
            margin-left: 10px;
            text-transform: uppercase;
            font-size: 25px;

        }

        .operadores h2{

            color: green;
            margin-left: 10px;
            text-transform: uppercase;
            font-size: 15px;

        }

        .operadores p{

            margin-left: 30px;
            text-transform: uppercase;

        }

        .operadores form .botao {

        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: medium;
        text-shadow: 1px 1px 1px black;
        color: white;


        background-color: rgb(58, 204, 13);
        margin-top: 20px;

        width: 70px;
        height: 40px;

        border-radius: 5px;

        outline: 2px solid rgb(58, 204, 13);

        border: none;

        }

        form .botao:hover{


        background-color: rgb(163, 247, 137);
        margin: 0px solid white;

        }


    </style>



    <meta charset="UTF-8">
    <title>Operadores Matemáticos</title>
</head>
<body>
    

    <div class="operadores">
    <h1> Operadores Matemáticos</h1>
    
    <?php 

        $var1 = 5;
        $var2 = 2;
    ?>
    
    <h2> Soma (+) </h2>

        <?php 
            $soma = $var1 + $var2;
            echo '<p> A soma de ' . $var1 . ' e ' . $var2 . ' é igual a: ' . $soma . '</p>';  
        ?>


    <h2> Subtração (-) </h2>
        
        <?php 
            $subt = $var1 - $var2;
            echo '<p> A soma de ' . $var1 . ' e ' . $var2 . ' é igual a: ' . $subt . '</p>';  
        ?>

        <h2> Multiplicação (*) </h2>
        
        <?php 
            $mult = $var1 * $var2;
            echo '<p> A multiplicação de ' . $var1 . ' e ' . $var2 . ' é igual a: ' . $mult . '</p>'; 
        ?>


        <h2> Divisão (/) </h2>
                
            <?php 
                $div = $var1 / $var2;
                echo '<p> A divisão de ' . $var1 . ' e ' . $var2 . ' é igual a: ' . $div . '</p>'; 
            ?>
        
        <h2> Resto (%) </h2>
                
            <?php 
                $resto = $var1 % $var2;
                echo '<p> O resto da divisão de ' . $var1 . ' e ' . $var2 . ' é igual a: ' . $resto . '</p>'; 
            ?>
        
        <h2> Elevação (**) </h2>
                
            <?php 
                $elev = $var1 ** $var2;
                echo '<p>' . $var1 . ' elevado a ' . $var2 . ' é igual a: ' . $elev . '</p>'; 
            ?>

    </div>

    <div class="operadores">
        <h1> Procedência de Calculos </h1>

        <p> Qual o resultado no PHP para a Expressão 50/2 + 3 ** 2?</p>

        <form method="post" action="operadores_mat.php"> 

        <input type="number" name="valor">
        <button class="botao"> Enviar </button>

        </form>

        <?php 

            $conta = $_POST["valor"] ?? "";

            $calculo = 50/2+3**2;

            if ($conta == ""){


            } else if($conta == $calculo) {


                echo "Parabéns você acertou";

            } else {

                echo "Resposta errada: o resultado é $calculo ";
            }


        ?>

    <div>






</body>
</html>