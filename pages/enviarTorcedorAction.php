<?php

echo "<h1> Dados Enviados </h>";
echo "<p>Torcedor " . $_POST['nome'] . "</p>";
//echo "<p>Torcedor " {$_POST['nome']} "</p>";
echo "<p>Cpf: " . $_POST['cpf'] . "</p>";
echo "<p>Frequencia no estádio: " . $_POST ['Frequencia'] . "</p>";
echo "<p>É sócio torcedor? " . $_POST['socio'] . "</p>";
echo "<p>Possui camisa oficial do time? " . $_POST['camisa'] . "</p>";
echo "<p>Qual seu clube de coração? " . $_POST['clube'] . "</p>";

$socioTorcedor = isset($_POST['socio_torcedor']) ? "Sim" : "Não";
echo "<p>Sou sócio torcedor do meu clube? " . $socioTorcedor . "</p>";

 
$camisaTorcedor = isset($_POST['camisa_oficial']) ? "Sim" : "Não";
echo "<p>Possuo camisa oficial do meu clube? " . $camisaTorcedor . "</p>";


//var_dump($_POST);
//var_dump($_GET);



?>