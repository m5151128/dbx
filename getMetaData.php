<?php

require_once 'dbxClient.php';

class getMetaData extends dbxClient {

    function getData($dropboxPath) {
        return $this->dbxClient->getMetadataWithChildren($dropboxPath);
    }
}

print_r((new getMetaData())->getData('/'));
