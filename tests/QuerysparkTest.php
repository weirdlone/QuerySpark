<?php
/**
 * Tests for QuerySpark
 */

use PHPUnit\Framework\TestCase;
use Queryspark\Queryspark;

class QuerysparkTest extends TestCase {
    private Queryspark $instance;

    protected function setUp(): void {
        $this->instance = new Queryspark(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Queryspark::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
