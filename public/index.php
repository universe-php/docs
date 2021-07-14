<?php
/**
 * Interstellar - PHP Web FrameWork
 * @author  Volkan Şengül <iletisim@volkansengul.com>
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor/autoload.php';
try {
    $app = new Universe\Singularity(__DIR__ . DIRECTORY_SEPARATOR, realpath('../') . DIRECTORY_SEPARATOR);
} catch (Exception $e){
    echo 'err : '.$e->getMessage();
}