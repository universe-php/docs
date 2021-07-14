<?php
/**
 * Created by PhpStorm.
 * User: volkan
 * Date: 11.12.2018
 * Time: 17:02
 */

namespace App\Middleware;

use Universe\Asteroids\Asteroids;
use Universe\Routing\Router;
use Universe\Shield\Auth;
use Universe\Signalling\Signal;
use Universe\Starship\Middleware;
use App\Middleware\Request;

class Autorun extends Middleware {

    private $input;
    private $auth;

    public function __construct() {
        parent::__construct();
        // Allow from any origin
       $this->cors();

        if (isset($_SERVER['HTTP_ORIGIN'])) {
            // should do a check here to match $_SERVER['HTTP_ORIGIN'] to a
            // whitelist of safe domains
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Max-Age: 86400');    // cache for 1 day
        }
    }

    private function cors(){
            // Allow from any origin
            if (isset($_SERVER['HTTP_ORIGIN'])) {
                // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
                // you want to allow, and if so:
                header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
                header('Access-Control-Allow-Credentials: true');
                header('Access-Control-Max-Age: 86400');    // cache for 1 day
            }

            // Access-Control headers are received during OPTIONS requests
            if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

                if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
                    // may also be using PUT, PATCH, HEAD etc
                    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

                if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
                    header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

                exit(0);
            }
    }
}
?>
