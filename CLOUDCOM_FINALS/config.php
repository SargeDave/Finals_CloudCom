<?php
    // Local database configuration
    $host = "127.0.0.1";
    $user = "root";                      
    $pass = "";                                  
    $db = "movietheatredb";
    $port = 3306;
    
    // AWS RDS configuration (Uncomment to use RDS)
    // $host = "movieticketing.clgwqycsgpvt.ap-southeast-1.rds.amazonaws.com";  // AWS RDS endpoint
    // $user = "admin";   // RDS username
    // $pass = "cloudcom123";   // RDS password
    // $db = "movieticketing";         // Database name
    // $port = 3306;
    
    $con = mysqli_connect($host, $user, $pass, $db, $port) or die("Connection failed: " . mysqli_connect_error());
?>
