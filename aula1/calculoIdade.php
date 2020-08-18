 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="./css/geral.css">

</head>

 <body>
    <form >
        
        <label class="label">
            Digite a sua data de nascimento 
        </label>

        <input type="date" name="data" class="input">

        <button type="submit" class="button">Enviar Dados</button>

    </form>

    <div class="resposta"><?php
        
        
        if (isset($_GET['data'])) {

            $anoDeNascimento =  (int) (str_split($_GET['data'], 4))[0];
            $anoAtual = (int) date('Y');
            $idade = $anoAtual - $anoDeNascimento;
            echo "<h3>Sua idade e "  . $idade . "!</h3>"; 
        
        }
    ?></div>
</body>

 </html>