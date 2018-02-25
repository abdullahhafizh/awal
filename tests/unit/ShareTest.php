<?php
namespace Abdullahhafizh\Awal;

class ShareTest extends \PHPUnit_Framework_TestCase
{
    public function testSetup()
    {
        $ch = curl_init();
        Share::setup($ch);

        self::assertInternalType('resource', $ch);
    }
}
