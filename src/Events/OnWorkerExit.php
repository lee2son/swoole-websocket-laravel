<?php

namespace Lee2son\Swoolaravel\Events;

/**
 * @see \Lee2son\Swoolaravel\Swoole\Server::onWorkerExit()
 */
class OnWorkerExit
{
    /**
     * @var \Swoole\Server
     */
    public $server;

    /**
     * @var int
     */
    public $workerId;

    /**
     * @param \Swoole\Server
     */
    public function __construct($server, $workerId)
    {
        $this->server = $server;
        $this->workerId = $workerId;
    }
}