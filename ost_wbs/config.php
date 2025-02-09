<?php
# Turn off all error reporting
error_reporting();

# Database Credentials
define('DBTYPE','');
define('DBHOST','');
define('DBNAME','');
define('DBUSER','');
define('DBPASS','');

# Table prefix
define('TABLE_PREFIX','ost_');

# Global Rules
define('ATSTATUS', array(0,1,2,3,4,5,6,7));
define('APIKEY_RESTRICT', false); // Check for IP authorization


# DB Connection
class DBConnection{
    function getDBConnect(){
        
        $mysqli = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME) or die("Couldn't connect");
       
        if ($mysqli->connect_errno)
        { 
            echo "ERROR: Cannot connect web service to database";
            echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>"; 
            exit();
        } 
         return $mysqli;
    }
}

?>
