<?php

require_once ("vendor/autoload.php");

use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "views",
    "cache_dir"     => "views/cache",
    "debug"         => false,
);

Tpl::configure( $config );



