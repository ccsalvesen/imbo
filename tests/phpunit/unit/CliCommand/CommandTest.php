<?php
/**
 * This file is part of the Imbo package
 *
 * (c) Christer Edvartsen <cogo@starzinger.net>
 *
 * For the full copyright and license information, please view the LICENSE file that was
 * distributed with this source code.
 */

namespace ImboUnitTest\CliCommand;

use Imbo\CliCommand\CliCommand;

/**
 * @covers Imbo\CliCommand\CliCommand
 * @group unit-cli
 * @group cli-commands
 */
class CliCommandTest extends \PHPUnit_Framework_TestCase {
    /**
     * @var Imbo\CliCommand\CliCommand
     */
    private $command;

    /**
     * Set up the command
     */
    public function setUp() {
        $this->command = $this->getMockBuilder('Imbo\CliCommand\CliCommand')->disableOriginalConstructor()->getMockForAbstractClass();
    }

    /**
     * Tear down the command
     */
    public function tearDown() {
        $this->command = null;
    }

    public function testCanSetAndGetConfiguration() {
        $config = ['some' => 'config'];
        $this->command->setConfig($config);
        $this->assertSame($config, $this->command->getConfig());
    }

    public function testFetchesTheDefaultConfigurationIfNoneHasBeenSet() {
        $this->assertEquals(require __DIR__ . '/../../../../config/config.default.php', $this->command->getConfig());
    }
}
