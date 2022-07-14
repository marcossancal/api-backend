<?php
require 'flight/Flight.php';
require 'app/config.php';
require 'routes/global.php';

Flight::route('GET /', function(){
    Flight::halt(401,'Unauthorized');
});

Flight::route('POST /', function(){
    Flight::halt(401,'Unauthorized');
});

Flight::start();