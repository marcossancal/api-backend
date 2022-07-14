<?php

    class Auth{
        
        function loginAuth(){
            if(isset($_POST['username']) && isset($_POST['password'])){
                $userData = array(
                    'username' => $_POST['username'],
                    'password' => $_POST['password']
                );
                $isValid = authLoginDAO($userData);            
                if($isValid == true){
                    $_SESSION['user'] = $userData['username'];
                    $_SESSION['loggedIn'] = true;
                    return true;
                }else{
                    return false;
                }
            }
        }

        function isLogged(){
            if($_SESSION['loggedIn'] == true){
                return true;
            }else{
                return false;
            }
        }
        
        function isAuth(){
            if(isset($_SESSION['loggedIn'])){
                return true;
            }else{
                return false;
            }
        }
    }

?>