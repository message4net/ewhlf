<?php 
// echo __DIR__.'<br>';
// echo __FILE__.'<br>';
//echo dirname('.');
//echo dirname('..');
//require '../comm/inc/init.php';

define(DS, DIRECTORY_SEPARATOR);

if($_REQUEST['a']!='' && is_dir('..'.DS.'app'.DS.$_REQUEST['a'].DS)){
    define('APP_NAME', $_REQUEST['a']);
}else{
    define('APP_NAME', '404');
}

if($_REQUEST['m']!=''){
    define('APP_NAME', $_REQUEST['a']);
}else{
    define('APP_NAME', '404');
}