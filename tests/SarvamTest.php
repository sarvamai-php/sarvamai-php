<?php declare(strict_types=1);

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Sarvam\Sarvam;
use Sarvam\Connection;

#[CoversClass(Sarvam::class, Connection::class)]
class SarvamTest extends TestCase
{
    #[Test]
    public function testStartReturnsConnectionMessage(): void
    {
        // Create a mock for the Connection class
        $mockConnection = $this->createMock(Connection::class);

        // Define the expected behavior of connect()
        $mockConnection->method('connect')->willReturn('Connected!');

        // Inject the mock into Sarvam
        $sarvam = new Sarvam($mockConnection);

        // Assert that Sarvam::start returns the expected result
        $this->assertSame('Connected!', $sarvam->start());
    }
}
