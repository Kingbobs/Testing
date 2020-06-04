<?php

declare(strict_types = 1);

namespace core\provider;

use core\Cryptic;
use mysqli;

     $db = "newdb"; 
     //connect to server with username and password 
     $connection = @mysql_connect ("localhost","root", "") or die (mysql_error()); 
     //connect to database 
     $result = @mysql_create_db($db, $connection) or die(mysql_error()); 
     if ($result) 
     { 
       echo"Database has been created!"; 
     } 
  ?> 
