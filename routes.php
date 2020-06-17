<?php

require_once ("vendor/autoload.php");
require_once ("tpl.php");

use Rain\Tpl;

$template = new Tpl;

$content = array(

    "1" => "/index",
    "2" => "/hello"

);

Flight::route('/', function () use($template, $content) {
    $template->draw("templates/header");
    $template->draw("pages{$content['1']}");
    $template->draw("templates/footer");

});


Flight::route('/hello', function () use($template, $content){
    $template->draw("templates/header");
    $template->draw("pages{$content['2']}");
    $template->draw("templates/footer");
});


Flight::start();