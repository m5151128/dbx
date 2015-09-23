<?php

require_once 'dbxClient.php';
use \Dropbox as dbx;

class fileUpload extends dbxClient {

    function upload($dropboxPath, $filePath = null, $fileName) {
        $response = @file_get_contents($filePath . $fileName, false, $context);
        if (! $response) {
            return $filePath . $fileName . ' not found' . PHP_EOL;
        }

        $f = fopen($filePath . $fileName, "rb");
        $metaData = $this->dbxClient->uploadFile($dropboxPath . $fileName, dbx\WriteMode::add(), $f);
        fclose($f);

        return $metaData;
    }
}

$fileName = 'upload.jpg';
$filePath = null;
$dropboxPath = '/';

print_r((new fileUpload())->upload($dropboxPath, $filePath, $fileName));
