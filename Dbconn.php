<?php

define('AUTHOR_ID', 'author_id');
define('EMAIL', 'email');
define('ADDRESS', 'address');
define('FULL_NAMES', 'fullname');
define('BIOGRAPHY', 'biography');
define('DATE_OF_BIRTH', 'date_of_birth');
define('SUSPENSION', 'suspension');

 require_once "constants.php";
    try{
        $DBconn = new PDO("mysql:host=" . db_host . ";dbname=" . dbname, username,password);

        $DBconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected Successfully!!";


    } catch(PDOException  $e){
        echo "Connection failed: " .  $e->getMessage();
    }
?>