<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/hello/:name', function ($name) {
    $inteiro1 = 42;
    $inteiro2 = 79;
    $texto = "Ola, ";
    $fracao = 2.3;
    
    $soma = $inteiro1 + $inteiro2;
    $subtracao = $inteiro2 - $inteiro1;
    $multi = $inteiro1 * $fracao;
    $divisao = $inteiro2 / $fracao;
    
    $olaMundo = $texto . $name;
    
    echo "<p>Soma: " . $soma . "</p>";
    echo "<p>Subtracao: " . $subtracao . "</p>";
    echo "<p>Multiplicacao: " . $multi . "</p>";
    echo "<p>Divisao: " . $divisao . "</p>";
    
    echo "<p>" . $olaMundo . "</p>";
});

$app->run();
