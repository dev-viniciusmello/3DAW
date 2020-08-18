 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="./css/geral.css">

 </head>

 <body>
     <form>
        <h1 style="text-align: center;">Calculo Service</h1>

         <label class="label">
             Digite o seu nome
         </label>

         <input type="text" name="nome" class="input">

         <label class="label">
             Digite a sua data de nascimento
         </label>

         <input type="date" name="data" class="input">

         <button type="submit" class="button">Enviar Dados</button>

     </form>

     <div class="resposta"><?php


        if (isset($_GET['data'], $_GET['nome'])) {
            $nome = $_GET['nome'];
            $anoDeNascimento =  (int) (str_split($_GET['data'], 4))[0];
            $anoAtual = (int) date('Y');
            $idade = $anoAtual - $anoDeNascimento;
            echo "<h2>Idade: "  . $idade . "</h2>";
            echo "<h2>Nome: " .  $nome . " </h2>";
            echo "<h2>Data de Nascimento: " .  $_GET['data'] . " </h2>";
        }
        ?></div>
 </body>

 </html>