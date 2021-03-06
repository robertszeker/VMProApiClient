<?php

namespace MovingImage\Test\Client\VMPro;

use MovingImage\Client\VMPro\ApiClientFactory;
use MovingImage\Client\VMPro\Factory\Guzzle6ApiClientFactory;
use PHPUnit\Framework\TestCase;

class ApiClientFactoryTest extends TestCase
{
    /**
     * Assert whether the ApiClientFactory stub class in the namespace root
     * namespace inherits upon the appropriate client factory subclass.
     */
    public function testAppropriateInheritance()
    {
        $factory = new ApiClientFactory();
        $this->assertInstanceOf(Guzzle6ApiClientFactory::class, $factory);
    }
}
