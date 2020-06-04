<?php

declare(strict_types = 1);

namespace core\provider;

use core\Cryptic;
use mysqli;

class MySQLProvider {

    $db = "newdb"; 
     //connect to server with username and password 
     $connection = @mysql_connect ("localhost","root", "") or die (mysql_error()); 
     //connect to database 
     $result = @mysql_create_db($db, $connection) or die(mysql_error()); 
     if ($result) 
     { 
       echo"Database has been created!"; 
     } 
      function authenticate_user() 
     { 
       header('WWW-Authenticate: Basic realm="Secret Stash"'); 
       header("HTTP/1.0 401 Unauthorized"); 
       exit; 
     } 
     if (! isset($_SERVER['PHP_AUTH_USER'])) 
     { 
       authenticate_user(); 
     } 
     else 
     { 
       mysql_pconnect("localhost","authenticator","secret") or die("Can't connect to database server!"); 
       mysql_select_db("abcd") or die("Can't select authentication database!"); 
       $query = "SELECT username, pswd FROM user WHERE username='$_SERVER[PHP_AUTH_USER]' AND pswd=MD5('$_SERVER[PHP_AUTH_PW]')"; 
       $result = mysql_query($query); 
       // If nothing was found, reprompt the user for the login information. 
       if (mysql_num_rows($result) == 0) 
       { 
         authenticate_user(); 
       } 
     }
	$cnx = mysql_connect('mysql153.secureserver.net','abcd','password'); 
     mysql_select_db('abcd'); 
     $employees = @mysql_query('SELECT ID, FirstName FROM Employee'); 
     if (!$employees) 
     { 
       die('Error retrieving employees from database!'. 
       'Error: ' . mysql_error() ); 
     } 
     while ($employee = mysql_fetch_array($employees)) 
     { 
       $id = $employee['ID']; 
       $name = htmlspecialchars($author['Name']); 
       echo("$name "); 
  v     echo("$id"); 
     } 
   ? >
