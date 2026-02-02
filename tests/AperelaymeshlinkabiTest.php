<?php
/**
 * Tests for ApeRelayMeshLinkAbi
 */

use PHPUnit\Framework\TestCase;
use Aperelaymeshlinkabi\Aperelaymeshlinkabi;

class AperelaymeshlinkabiTest extends TestCase {
    private Aperelaymeshlinkabi $instance;

    protected function setUp(): void {
        $this->instance = new Aperelaymeshlinkabi(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Aperelaymeshlinkabi::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
