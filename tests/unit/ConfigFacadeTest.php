<?php
namespace Abdullahhafizh\Awal;

use Composer\Config;

class ConfigFacadeTest extends \PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $config = new ConfigFacade();
        self::assertInternalType('string', $config->getUserAgent());
    }
}
