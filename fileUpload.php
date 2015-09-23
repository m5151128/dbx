<?php

require_once 'dbxClient.php';
use \Dropbox as dbx;

class fileUpload extends dbxClient {

    function upload() {
        $fileName = 'upload.jpg';
        $f = fopen($fileName, "rb");
        $metaData = $this->dbxClient->uploadFile('/' . $fileName, dbx\WriteMode::add(), $f);
        fclose($f);

        return $metaData;
    }
}

print_r((new fileUpload())->upload());
