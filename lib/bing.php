<?php 

class bing{

    public static function generateAuthFile($apikey){
        $filename = rex_path::base($apikey.".txt");
        $file = fopen($filename, "w");
        fwrite($file, $apikey);
        fclose($file);
    }

}