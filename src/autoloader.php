<?php

spl_autoload_register(function () {
    include_once 'db/DB.php';
    include_once 'entities/Log.php';
});

