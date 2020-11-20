<?php

namespace Flysion\Swoolaravel\Bootstraps;

interface BootstrapInterface
{
    /**
     * @param \Flysion\Swoolaravel\Swoole\Server|\Flysion\Swoolaravel\Swoole\Http\Server|\Flysion\Swoolaravel\Swoole\WebSocket\Server $server
     */
    public function handle($server);
}