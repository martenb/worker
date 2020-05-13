<?php declare(strict_types = 1);

$autoloader = require __DIR__ . '/../src/composer_autoloader.php';

if (!$autoloader()) {
	die(
		'You need to set up the project dependencies using the following commands:' . PHP_EOL .
		'curl -sS https://getcomposer.org/installer | php' . PHP_EOL .
		'php composer.phar install' . PHP_EOL
	);
}

return new Adbros\Worker\Console\WorkerApplication();
