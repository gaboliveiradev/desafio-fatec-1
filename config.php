<?php
    define('BASEDIR', dirname(__FILE__, 2));
    define('VIEWS', BASEDIR . '/View/modules/');

    $_ENV['db']['host'] = "localhost:3307";
    $_ENV['db']['user'] = "root";
    $_ENV['db']['pass'] = "mysqldev@2835";
    $_ENV['db']['dbname'] = "agatecnologia_db";