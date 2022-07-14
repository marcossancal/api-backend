<?php

    function getUser($user_id){
        $db = Flight::db();
        $user = $db->query("SELECT * FROM users WHERE user_id = $user_id");
        return $user;
    }

?>