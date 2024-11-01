<?php 

namespace config;

class GlobalUtils{


    public static function getBaseUrl() {
        return "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["REQUEST_URI"]."?");
    }
    
    public static function getLinkUrl() {
        $PROJECT_FOLDER = '/';
        return "http://".$_SERVER["SERVER_NAME"].$PROJECT_FOLDER;
    }
}



?>