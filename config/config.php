<?php
$dirInt="";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$dirInt}");
$bar=(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?"":"/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");

define('HOST','calendario_v1.mysql.dbaas.com.br');
define('DB','calendario_v1');
define('USER','calendario_v1');
define('PASS',"Marvel@22");

include(DIRREQ.'calendario_v1\lib\composer\vendor\autoload.php');