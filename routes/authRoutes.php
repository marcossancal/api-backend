<?php
    require 'classes/authClass.php';
    Flight::route('GET /auth',function(){
        Flight::halt(401,'Unauthorized');
    });

    Flight::route('GET /logout',function(){
        Flight::halt(401,'Unauthorized');
    });

    Flight::route('POST /auth', function(){
        $auth = new Auth();
        $isValid = $auth->loginAuth();
        if($isValid == true){
            echo 'true';
        }else{
            echo 'false';
        }
    });

    Flight::route('POST /logout', function(){
        $auth = new Auth();   
        $isLogged = $auth->isLogged();
        if($isLogged == true){
            session_destroy();
        }else{
            session_destroy();
        }
    });

?>