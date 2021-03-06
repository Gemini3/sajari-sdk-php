<?php

namespace Sajari\Client;

class WithEndpoint implements Opt
{
    /** @var $endpoint string */
    private $endpoint;

    /**
     * WithEndpoint constructor.
     * @param string $endpoint
     */
    public function __construct($endpoint)
    {
        $this->endpoint = $endpoint;
    }

    public function Apply(Client $c)
    {
        $c->setEndpoint($this->endpoint);
    }
}