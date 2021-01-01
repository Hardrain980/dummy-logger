<?php

namespace Leo\Fixtures;

use \Psr\Log\NullLogger;

class DummyLogger extends NullLogger
{
	public function log($level, $message, array $context = array())
    {
        echo "Level: {$level}", PHP_EOL;
        echo "Message: {$message}", PHP_EOL;
    }
}

?>
