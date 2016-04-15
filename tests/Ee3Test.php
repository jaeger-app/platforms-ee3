<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./tests/Ee3Test.php
 */
namespace JaegerApp\tests\Platforms;

use JaegerApp\Platforms\Ee3;

/**
 * Jaeger - EE3 object Unit Tests
 *
 * Contains all the unit tests for the \Jaeger\Platforms\Ee3 object
 *
 * @package mithra62\Tests
 * @author Eric Lamb <eric@mithra62.com>
 */
class Ee3Test extends \PHPUnit_Framework_TestCase
{

    public function testInit()
    {
        $ee3 = new Ee3();
        $this->assertTrue(method_exists($ee3, 'getDbCredentials'));
        $this->assertTrue(method_exists($ee3, 'getEmailConfig'));
        $this->assertTrue(method_exists($ee3, 'getCurrentUrl'));
        $this->assertTrue(method_exists($ee3, 'getSiteName'));
        $this->assertTrue(method_exists($ee3, 'getTimezone'));
        $this->assertTrue(method_exists($ee3, 'getSiteUrl'));
        $this->assertTrue(method_exists($ee3, 'getEncryptionKey'));
        $this->assertTrue(method_exists($ee3, 'getConfigOverrides'));
        $this->assertInstanceOf('JaegerApp\\Platforms\\AbstractPlatform', $ee3);
    }
}