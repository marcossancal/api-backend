<?php
    require 'classes/userClass.php';
    Flight::route('GET /user',function(){
        Flight::halt(401,'Unauthorized');
    });

    Flight::route('GET /user/@user_id',function($user_id){
        // $user = new User();
        // $user = $user->getUser($user_id);
        echo 'Marcos';
    });

    Flight::route('GET /users/',function(){
        $user = new User();
        $users = $user->getUsers();
        echo json_encode($users);
    });
?>