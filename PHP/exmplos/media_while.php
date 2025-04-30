<?php
// Importações
// Declaração de Variáveis
$nome = readline("Diga seu nome: ");
$prova1 = readline("Nota prova1: ");
// Processamento
while ($prova1 < 0 || $prova1 > 10) { //valida prova1
    // Saídas
    $prova1 = readline("Digite um valor entre 0-10 para prova1!\n");
}
?>