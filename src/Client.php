<?php

namespace Correios;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Client as HttpClient;
use Correios\Services\Freight;
use Correios\Services\ZipCode;
use Correios\Contracts\FreightInterface;
use Correios\Contracts\ZipCodeInterface;

class Client
{
    /**
     * Serviço de frete.
     *
     * @var \Correios\Contracts\FreightInterface
     */
    protected $freight;

    /**
     * Serviço de CEP.
     *
     * @var \Correios\Contracts\ZipCodeInterface
     */
    protected $zipcode;

    /**
     * Cria uma nova instância da classe Client.
     *
     * @param \GuzzleHttp\ClientInterface|null  $http
     * @param \Correios\Contracts\FreightInterface|null $freight
     * @param \Correios\Contracts\ZipCodeInterface|null $zipcode
     */
    public function __construct(
        ClientInterface $http = null,
        FreightInterface $freight = null,
        ZipCodeInterface $zipcode = null
    ) {
        $this->http = $http ?: new HttpClient;
        $this->freight = $freight ?: new Freight($this->http);
        $this->zipcode = $zipcode ?: new ZipCode($this->http);
    }

    /**
     * Serviço de frete dos Correios.
     *
     * @return \Correios\Contracts\FreightInterface
     */
    public function freight()
    {
        return $this->freight;
    }

    /**
     * Serviço de CEP dos Correios.
     *
     * @return \Correios\Contracts\ZipCodeInterface
     */
    public function zipcode()
    {
        return $this->zipcode;
    }
}
