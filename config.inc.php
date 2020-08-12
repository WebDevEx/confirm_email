<?php

define('HOME_PATH', dirname(__FILE__). '/');
$env = 'production';

function asset_path($relative_path){
    global $env;
    if($env == 'local')
        return  '/gabrael/'. $relative_path;
    return '/'.$relative_path;
}