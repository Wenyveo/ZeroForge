<?php
/**
 * Tests for ZeroForge
 */

use PHPUnit\Framework\TestCase;
use Zeroforge\Zeroforge;

class ZeroforgeTest extends TestCase {
    private Zeroforge $instance;

    protected function setUp(): void {
        $this->instance = new Zeroforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Zeroforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
