<?php

namespace Sunaoka\Aws\Structures\Sfn\SendTaskHeartbeat;

trait SendTaskHeartbeatTrait
{
    /**
     * @param SendTaskHeartbeatRequest $args
     * @return SendTaskHeartbeatResponse
     */
    public function sendTaskHeartbeat(SendTaskHeartbeatRequest $args)
    {
        $result = parent::sendTaskHeartbeat($args->toArray());
        return new SendTaskHeartbeatResponse($result->toArray());
    }
}
