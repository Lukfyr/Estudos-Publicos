<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings</title>
</head>
<body>
    <h1>Manipulação de strings</h1>
    <div>
        <div>
            <?php 
            //double quoted=",tudo entre aspas duplas será lido e interpretado.
            //single quoted=',tudo entre apas simples será lido e interpretado da maneira escrita
            $nome="Lucas";
            echo "olá $nome!";
            ?>
        </div>
        <div>
            <?php
            $nome="Lucas";
            echo 'olá $nome!';
            ?>
        </div>
        <div>
            <?php 
            $nom = "Thiago";
            $snom = "Silva";
            //sequencias de escape

            //echo "$nom"Thiagueira"$snom"; demonstra erro de sixtax
            echo '$nom" Thiagueira "$snom'."   "; //imprimi como escrito no codigo

            /*jeito correto ->*/ echo "$nom\"minotauro\"$snom"
            /* 
                sequencias de escape para aspas <duplas>
            /n -> nova linha
            /t -> tabulação horizontal 
            // -> barra invertida
            /$ -> sinal e sifrão
            /u{} -> caracter unicode

            */
            ?>
        </div>
    </div>
</body>
</html>