<?php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

// database configuration parameters
$conn = array(
    'driver'   => 'pdo_mysql',
    'host'     => '172.10.3.2',
    'dbname'   => 'projectmanager',
    'user' => 'root',
    'password' => getenv('MYSQL_ROOT_PASSWORD')
);

// check connection
// if(!$conn) {
//     echo 'Connection error: ' . mysqli_connect_error();
// } else {
//     echo 'ORM connection established';
// }
// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);