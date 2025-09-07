<?php
define('PATH', realpath('.'));
define('SUBFOLDER', false);
define('URL', 'https://yourdomain.com' );
define('STYLESHEETS_URL', '//yourdomain.com' );
date_default_timezone_set('Asia/Kolkata');

/* 
 ini_set("display_errors","1");
error_reporting(E_ERROR);  */  

error_reporting(0);
return [
  'db' => [
    'name'    =>  'database name here' ,
    'host'    =>  'localhost',
    'user'    =>  'database user here' ,
    'pass'    =>  'database pass here' ,
    'charset' =>  'utf8mb4'
  ]
];

?>