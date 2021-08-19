<?php

namespace FlyingLuscas\Correios\Tests;

use FlyingLuscas\Correios\Contracts\FreightInterface;
use FlyingLuscas\Correios\Contracts\ZipCodeInterface;
use FlyingLuscas\Correios\Client;

class ClientTest extends TestCase
{
    /**
     * @var \FlyingLuscas\Correios\Client
     */
    protected $correios;

    public function setUp() : void
    {
        parent::setUp();

        $this->correios = new Client();
    }

    public function testFreightService()
    {
        $this->assertInstanceOf(FreightInterface::class, $this->correios->freight());
    }

    public function testZipCodeService()
    {
        $this->assertInstanceOf(ZipCodeInterface::class, $this->correios->zipcode());
    }
}
