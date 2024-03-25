<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>
    <link type="text/css" rel="stylesheet" href="estilo.css"/>
</head>
<body>
    <h1>CT Desenvolvimento de Sistemas - Back-End</h1>
    <div id="container">
    <?php
        echo "ESTRUTURA CONDICIONAL ENCADEADA<br><br>";
        $sGenero="feminino";
        if($sGenero == "masculino"){
            echo "Olá SENHOR!!!";
        }
        else if($sGenero == "feminino"){
            echo "Olá SENHORA!!!";
        }
        else{
            echo "Gênero INVÁLIDO!!!";
        }
    ?>
    </div>
</body>
</html>