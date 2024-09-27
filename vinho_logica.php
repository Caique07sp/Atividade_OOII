<?php
require_once 'Vinho.php';

$vinho = new Vinho("Cabernet Sauvignon", "Tinto", 20.00, 2018);

$infoVinho = $vinho->mostrarVinho();
$Oferta = $vinho->olharPreco() ? "O Produto esta em Oferta, CORRAA!!" : "O Produto esta com o preço normal, APROVEITEE!!";
?>  
 