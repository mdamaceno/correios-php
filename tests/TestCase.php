<?php

namespace FlyingLuscas\Correios\Tests;

use PHPUnit\Framework\TestCase as PHPUnitTestCase;

abstract class TestCase extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();

        error_reporting(E_ALL);
    }
}
