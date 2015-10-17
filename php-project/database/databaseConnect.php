<?php

function loadDatabase() { 
    $dbHost = "";
    $dbPort = "";
    $dbUser = "";
    $dbPassword = ""; 

    $dbName = "testdb"; 

    $openShiftVar = getenv('OPENSHIFT_MYSQL_DB_HOST'); 

    $dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
    $dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT'); 
    $dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
    $dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
    //echo "host:$dbHost:$dbPort dbName:$dbName user:$dbUser password:$dbPassword<br >\n"; 

    $db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword); 

    return $db;
} 

function printHi() {
    echo "Hi";
}
?> 
