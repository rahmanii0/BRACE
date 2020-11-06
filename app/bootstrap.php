<?php
//Load config
require_once 'config/config.php';

//// Load Libraries
//require_once 'libs/Core.php';
//require_once 'libs/Controller.php';
//require_once 'libs/Database.php';

//Auto load core libraries
spl_autoload_register(function ($className){
    require_once 'libs/' . $className . '.php';

});