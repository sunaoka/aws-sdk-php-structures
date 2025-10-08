<?php

namespace Sunaoka\Aws\Structures\GameLift\DeregisterGameServer;

trait DeregisterGameServerTrait
{
    /**
     * @param DeregisterGameServerRequest $args
     * @return void
     */
    public function deregisterGameServer(DeregisterGameServerRequest $args)
    {
        parent::deregisterGameServer($args->toArray());
    }
}
