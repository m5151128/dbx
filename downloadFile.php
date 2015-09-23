<?php

require_once 'dbxClient.php';

class downloadFile extends dbxClient {

    function download($dropboxPath, $downloadPath = null, $fileName) {
        $f = fopen($downloadPath . $fileName, "w+b");
        $metadata = $this->dbxClient->getFile($dropboxPath . $fileName, $f);
        fclose($f);

        return $metaData;
    }
}

$fileName = 'upload.jpg';
$downloadPath = 'files/';
$dropboxPath = '/';

print_r((new downloadFile())->download($dropboxPath, $downloadPath, $fileName));
