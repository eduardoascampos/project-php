<?php

require_once ("vendor/autoload.php");
require_once ("tpl.php");

use Rain\Tpl;

$template = new Tpl;

$content = array(

    "1" => "/index",
    "2" => "/about",
    "3" => "/services",
    "4" => "/contact",
);



Flight::route('/', function () use($template, $content) {
    $template->draw("templates/header");
    $template->draw("pages{$content['1']}");
    $template->draw("templates/footer");
});

Flight::route('/sobre', function () use($template, $content){
    $template->draw("templates/header");
    $template->draw("pages{$content['2']}");
    $template->draw("templates/footer");
});

Flight::route('/servicos', function () use($template, $content){
    $template->draw("templates/header");
    $template->draw("pages{$content['3']}");
    $template->draw("templates/footer");
});

Flight::route('/contato', function () use($template, $content){
    $template->draw("templates/header");
    $template->draw("pages{$content['4']}");
    $template->draw("templates/footer");
});


Flight::start();