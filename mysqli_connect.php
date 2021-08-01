<?php

// define constant variables
define('DB_NAME', 'epiz_29198858_user');
define('DB_USER', 'epiz_29198858');
define('DB_PASSWORD','9tJa3s0Gkeyx7');
define('DB_HOST', 'sql110.epizy.com');

try{

    // connection variable
    $con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // encoded language
    mysqli_set_charset($con, 'utf8');


}catch (Exception $ex){
    print "An Exception occurred. Message: " . $ex->getMessage();
} catch (Error $e){
    print "The system is busy please try later";
}


?>