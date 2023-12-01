<?php
    /* Database credentials. Assuming you are running MySQL server with default setting (user 'root' with no password) */
    define('DB_SERVER', '10.148.0.11');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'mysql_ime');
    define('DB_NAME', 'mightyweb');
    
    /* Attempt to connect to MySQL database */
    $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // Check connection
    if($mysqli->connect_error){
        header("Location: login.php?error=connect_error");
        // die("ERROR: Could not connect. " . $mysqli->connect_error);
    }
?>