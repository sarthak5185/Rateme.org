<?php

//DEVELOPMENT
// define('DB_USER', 'root');
// define('DB_HOST', 'localhost');
// define('DB_PASS', '');
// define('DB_NAME', 'rate_the_prof');

//PRODUCTION
define('DB_USER', 'Mfq7Zk6dFd');
define('DB_HOST', 'remotemysql.com');
define('DB_PASS', 'ee627tKJbr');
define('DB_NAME', 'Mfq7Zk6dFd');

// mysql://b0513b71ed99f1:e58003e2@us-cdbr-east-04.cleardb.com/heroku_8eb39c5282e2251?reconnect=true
// UN: b0513b71ed99f1
// pass: b0513b71ed99f1
// host: us-cdbr-east-04.cleardb.com

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if($connection == false){
    die("Service Temporarily Unavailable");
}

?>