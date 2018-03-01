<?php

final class myClass {

	private $food;

	public static function helloWorld(): string {
		return "Hello World!";
	}

	public function chrisFunction($var="GiveMe"): string {
		$this->food = $var;
		return $this->food;
	}

	public function mathFunction($amount=0): string {
		return (5 + $amount);
	}
}

?>
