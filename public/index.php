<?php

define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__DIR__));
define("APP", ROOT.DS.'app');
define("CONFIG", APP.DS.'config');
define("CONTROLLERS", APP.DS.'controllers');
define("MODELS", APP.DS.'models');
define("CORE", APP.DS.'core');
define("VIEWS", APP.DS.'views');


// ************************* config *************************
define("SERVER","localhost");
define("PORT","3306");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","fs8_proone");
define("DATABASE_TYPE","mysql");
define("DOMAIN_NAME","http://mvc.test/");

require_once("../vendor/autoload.php");

$app = new MVC\core\app();