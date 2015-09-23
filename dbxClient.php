<?php

require_once 'vendor/autoload.php';
use \Dropbox as dbx;

class dbxClient {

    public function __construct()
    {
        $accessToken = "Your Dropbox API app access token";
        $clientIdentifier = 'examples-account-info';

        $this->dbxClient = new dbx\Client($accessToken, $clientIdentifier);
    }
}
