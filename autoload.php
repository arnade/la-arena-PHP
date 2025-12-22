<?php

sql_autoload_register( function ($clases) {

    $file = __DIR__ . "/clases/" . $clases . ".php";
    if (file_exists($file)) {
        require_once $file;
    }

});
