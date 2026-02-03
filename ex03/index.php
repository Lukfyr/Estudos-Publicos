 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
 </head>
 <body>
    <div>
        <?php 
     //variaveis=$(sempre)
            $nome="Lucas";
            $sobrenome="Machado";
    //constantes=const(sempre)
            const PAIS="Brasil";
    #linguagem é case sensitive

            echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS  ;
   
    ?>
    </div>
    <div>
        <?php 
        //'Seta' para padrao UTC, padrao da america!
        date_default_timezone_set("America/sao_paulo");
        //Data conferir letras para cada tipo de data e escrita!
        echo "Hoje é " . date("d / F / Y") . " ás " . date("g:i:s");
        ?>
    </div>
 </body>
 </html>

