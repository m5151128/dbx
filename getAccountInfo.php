<?php

require_once 'dbxClient.php';

class getAccountInfo extends dbxClient
{
    function getData()
    {
        return $this->dbxClient->getAccountInfo();
    }
}

print_r((new getAccountInfo())->getData());
