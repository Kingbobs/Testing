?>php

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
       $plugin->getLogger()->info("..."); 
     } 
     $host="mysql153.secureserver.net"; 
     $uname="abcd"; 
     $pass="password"; 
     $connection= mysql_connect ($host, $uname, $pass); 
     if (! $connection) 
     { 
       die ("A connection to the Server could not be established!"); 
     } 
     else 
     { 
       echo "User root logged into to MySQL server ",$host," successfully."; 
     } 
       @mysql_connect("mysql153.secureserver.net","abcd","password") or die("Could not connect to MySQL server!"); 
     @mysql_select_db("abcd") or die("Could not select database!"); 
     echo "You're connected to a MySQL database!"; 
     mysql_close(); 
?>
