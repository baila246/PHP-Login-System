<?php 
// if there is no constant defined called __CONFIG__ , do not loas this file
 if(!defined('__CONFIG__')){
    exit('you do not have config file');
 }

 error_reporting(-1);
 ini_set('display_errors', 'On');
 // include the DB.php file:
 include_once "classes/DB.php";
  include_once "classes/filter.php";
 $con = DB::getConnection();
?>