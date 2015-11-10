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

$app->get('/', function() use($app){
    $app->view->setData(array(
        'title' => 'Página Principal',
        'page' => 'page/home'
    ));
    
    $app->render('layout.php');
});

$app->get('/sobre', function() use($app){
    $app->view->setData(array(
        'title' => 'Página Sobre',
        'page' => 'page/about'
    ));
    
    $app->render('layout.php');
});

$app->get('/lista', function() use($app){
    $app->view->setData(array(
        'title' => 'Página Lista',
        'page' => 'page/list'
    ));
    
    $app->render('layout.php');
});

$app->get('/imitation_game', function() use($app){
    $app->view->setData(array(
        'title' => 'Página - Jogo da Imitação',
        'page' => 'page/imitation_game'
    ));
    
    $app->render('layout.php');
});

$app->get('/the_martian', function() use($app){
    $app->view->setData(array(
        'title' => 'Página - Perdido em Marte',
        'page' => 'page/the_martian'
    ));
    
    $app->render('layout.php');
});

$app->get('/the_theory_of_everything', function() use($app){
    $app->view->setData(array(
        'title' => 'Página - A Teoria de Tudo',
        'page' => 'page/the_theory_of_everything'
    ));
    
    $app->render('layout.php');
});

$app->get('/gravity', function() use($app){
    $app->view->setData(array(
        'title' => 'Página - Gravidade',
        'page' => 'page/gravity'
    ));
    
    $app->render('layout.php');
});

$app->run();
