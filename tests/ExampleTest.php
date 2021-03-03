<?php

namespace Asad\ZohoCliq\Tests;

use Orchestra\Testbench\TestCase;
use Asad\ZohoCliq\ZohoCliqServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ZohoCliqServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        config('config.authtoken');
        $this->assertTrue(true);
    }
}
