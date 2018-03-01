<?php
declare(strict_types=1);
include("src/myClass.php");

use PHPUnit\Framework\TestCase;

final class HelloTest extends TestCase
{
	public function testHelloWorldResponsds(): void
	{
		$this->assertEquals(
			'Hello World!',
			myClass::helloWorld()
		);
	}

	public function testChrisFunction(): void
	{
		$testClass = new myClass();
		$result = $testClass->chrisFunction("Cookie");
		$this->assertEquals("Cookie", $result);
	}

	public function testMatch(): void
	{
		$testClass = new myClass();
		$result = $testClass->mathFunction();
		$this->assertEquals(5, $result);
	}
}
