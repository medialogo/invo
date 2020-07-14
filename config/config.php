<?php
declare(strict_types=1);

use Phalcon\Config;

//You may load configs from config.ini file.
//return new Phalcon\Config\Adapter\Ini("../config.ini");
$dotenv = Dotenv\Dotenv::createImmutable('C:\dev15\phalcon\tutorial\invo');
$dotenv->load();
return new Config([
    'database' => [
        //'adapter' => $_ENV['DB_ADAPTER'],
        'adapter' => 'Mysql',
        'host' => $_ENV['DB_HOST'],
        'username' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'dbname' => $_ENV['DB_DBNAME'],
        'charset' => 'utf8',//$_ENV['DB_CHARSET'],
    ],
    'application' => [
        'controllersDir' => $_ENV['CONTROLLERS_DIR'],
        'modelsDir' => $_ENV['MODELS_DIR'],
        'pluginsDir' => $_ENV['PLUGINS_DIR'],
        'formsDir' => $_ENV['FORMS_DIR'],
        'providersDir' => $_ENV['PROVIDERS_DIR'],
        'migrationsDir' => 'C:\dev15\phalcon\tutorial\invo\db\migrations',
        'viewsDir' => $_ENV['VIEWS_DIR'],
        'baseUri' => $_ENV['BASE_URI'],
    ],
]);


