<?php

namespace Sensorario\Tests\WheelLogger;

use PHPUnit_Framework_TestCase;
use Sensorario\WheelLogger\Logger;

class LoggerTest extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        $logger = new Logger();
    }

    public function testAcceptConfiguration()
    {
        $this->markTestIncomplete();
    }

    public function testFileDestinationCanBeConfigurable()
    {
        $this->markTestIncomplete();
    }

    public function testAllMessagesAreStoredInUniqueFile()
    {
        $this->markTestIncomplete();
    }

    public function testEachLevelLogInItsOwnFile()
    {
        $this->markTestIncomplete();
    }

    public function testAcceptFormatter()
    {
        $this->markTestIncomplete();
    }

    public function testFormatJsonWithPrettyPrintConstant()
    {
        $this->markTestIncomplete();
    }

    public function testFormatXml()
    {
        $this->markTestIncomplete();
    }
}
