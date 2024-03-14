<?php declare(strict_types = 1);

class HelloWorld
{
	public function sayHello(DateTimeImutable $date): void
	{
		echo 'Hello, ' . $date->format('j. n. Y');
	}
}

function takesAnInt(int $i) {
    return [$i, "hello"];
}

$data = ["some text", 5];
takesAnInt($data[0]);

$condition = rand(0, 5);
if ($condition) {
} elseif ($condition) {}
