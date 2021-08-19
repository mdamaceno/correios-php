<?php

namespace Correios\Tests;

use Correios\Contracts\FreightInterface;
use Correios\Contracts\ZipCodeInterface;
use Correios\Client;

class ClientTest extends TestCase
{
    /**
     * @var \Correios\Client
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
