<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\SendHeartbeat;

trait SendHeartbeatTrait
{
    /**
     * @param SendHeartbeatRequest $args
     * @return void
     */
    public function sendHeartbeat(SendHeartbeatRequest $args)
    {
        parent::sendHeartbeat($args->toArray());
    }
}
