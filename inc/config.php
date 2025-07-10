<?php 
// if there is no constant defined called __CONFIG__ , do not loas this file
 if(!defined('__CONFIG__')){
    exit('you do not have config file');
 }

 // include the DB.php file:
 include_once "classes/DB.php";
 $con = DB::getConnection();
?>