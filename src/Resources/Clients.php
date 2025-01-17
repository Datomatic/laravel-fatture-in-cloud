<?php

namespace Datomatic\FattureInCloud\Resources;

use Datomatic\FattureInCloud\Http\Client;

class Clients extends Entities
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
        $this->path .= '/clients';
    }
}
