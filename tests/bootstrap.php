<?php

require __DIR__ . '/../vendor/autoload.php';


use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

$paths = ['/entities'];
$isDevMode = false;

// the connection configuration
$dbParams = [
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'root',
    'dbname'   => 'watchlist'
];

$config = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode);
$connection = DriverManager::getConnection($dbParams, $config);
$entityManager = new EntityManager($connection, $config);