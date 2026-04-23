<?php
$db_connection_data = array (
  'dbms' => 1,
  'dsn' => 'mysql:host=localhost;port=3306dbname=__DB_NAME__',
  'driver_options' => 
  array (
  ),
  'host' => 'localhost',
  'port' => '3306',
  'login' => '__DB_USER__',
  'password' => '__DB_PWD__',
  'database' => '__DB_NAME__',
);

defined('PREFIX') or define('PREFIX' , 'phpboost_');
defined('PHPBOOST_INSTALLED') or define('PHPBOOST_INSTALLED', true);
require_once PATH_TO_ROOT . '/kernel/db/tables.php';
?>