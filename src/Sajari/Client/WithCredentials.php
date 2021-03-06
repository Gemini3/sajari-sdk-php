<?php

namespace Sajari\Client;

class WithCredentials implements Opt
{
    private $credentials;

    /**
     * WithCredentials constructor.
     * @param $credentials
     */
    public function __construct($credentials)
    {
        $this->credentials = $credentials;
    }

    public function Apply(Client $c)
    {
        $c->setCredentials($this->credentials);
    }

}