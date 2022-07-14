<?php
    Flight::register(
        'db', 
        'PDO', 
        array(
            'pgsql:host=localhost;port=5432;dbname=intranet;user=intranet;password=jsdk6ccp'
        )
    );

    function checkConn(){
        try{
            $db = Flight::db();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
?>