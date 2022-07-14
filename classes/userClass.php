<?php
    require 'DAO/userDAO.php';
    class User{
        
        function getUser($user_id){
            $user = getUserDAO($user_id);
            return $user;
        }

        function getUsers(){
            $db = Flight::db();
            $users = $db->query("SELECT * FROM users");
            return $users; 
        }
    }

?>