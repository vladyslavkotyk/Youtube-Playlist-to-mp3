<?php

define("DIRECTORY", "/home/ubuntu/workspace/cache/");

if (isset($_GET['id'])) {
    
    download($_GET['id'], $_GET['name']);
}

function download($file, $name) {
    
    $file_name = md5($file .  uniqid());   
    exec("youtube-dl --extract-audio -o '" . DIRECTORY . $file_name . ".%(ext)s' --audio-format mp3 " . $file);    
    $download_file = file_get_contents("cache/" . $file_name . ".mp3");
    
    $name = html_entity_decode($name, ENT_COMPAT, 'UTF-8');
    if ($name == "") {
        
        $name = $file_name;
    }
    header('Content-disposition: attachment; filename=' . basename($name . ".mp3"));
    header('Content-type: application/octet-stream');
    header('Content-Length: ' . filesize(DIRECTORY . $file_name . ".mp3"));
    readfile(DIRECTORY . $file_name . ".mp3");
    unlink(DIRECTORY . $file_name . ".mp3");
}

