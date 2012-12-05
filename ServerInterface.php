<?php

namespace React\Socket;

use Evenement\EventEmitterInterface;

// Events: connection
interface ServerInterface extends EventEmitterInterface
{
    public function listen($port, $host = '127.0.0.1');
    public function getPort();
    public function shutdown();
}
