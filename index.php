<?php
require_once 'vinho_logica.php';
require_once 'Vinho.php'
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info vinho</title>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.Base {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 600px;
    margin: auto;
}

h1 {
    color: #7A1B2D; 
    text-align: center;
    font-size: 2.5em;
}

p {
    color: #333;
    line-height: 1.6;
    margin: 15px 0;
}

.oferta {
    font-weight: bold;
    color: #D85A0D; 
    font-size: 1.2em;
    text-align: center;
}

@media (max-width: 600px) {
    h1 {
        font-size: 2em;
    }

    p {
        font-size: 1em;
    }
}

</style>
</head>

<body>

<div class="Base">
<h1>Vinho informaçoes</h1>
<p><?= $infoVinho ?></p>
<p class="oferta"><?= $Oferta ?></p>
</div>

</body>

</html>