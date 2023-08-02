<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <style>

        body{

            background-color: #ccc;

            padding: auto;



        }


        main{

            padding: 10px 10px 10px 10px;
            color: red;

            display: inline-block;

            box-shadow: 2px 2px 2px black;

            background-color: white;

            text-transform: uppercase;
            
        }


        .aprovado{

            padding: 10px 10px 10px 10px;
            color: green;

            display: inline-block;

            box-shadow: 2px 2px 2px green;

            background-color: white;

            text-transform: uppercase;
            
        }


        a {

            text-decoration: none;
            color: blue;

        }


    </style>
    <title>Formulário </title>
</head>
<body>
    
    <?php


        $nome = $_POST["nome"];
        $sobrenome = $_POST["s_nome"];

        if  (($nome == "") || ($sobrenome == "")){

            echo "<main>";
            echo "<p> Variáveis Vazias - Informar dados </p>";
            echo  '<a href=index.html>  Retorne ao Início  </a>';
            echo "</main>";


        } else {

            echo '<p class="aprovado"> Bem vindo:' . $nome . " " . $sobrenome . '</p>';

        }
   


    ?>
</body>
</html>