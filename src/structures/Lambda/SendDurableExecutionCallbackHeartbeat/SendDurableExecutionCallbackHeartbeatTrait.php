<?php

namespace Sunaoka\Aws\Structures\Lambda\SendDurableExecutionCallbackHeartbeat;

trait SendDurableExecutionCallbackHeartbeatTrait
{
    /**
     * @param SendDurableExecutionCallbackHeartbeatRequest $args
     * @return SendDurableExecutionCallbackHeartbeatResponse
     */
    public function sendDurableExecutionCallbackHeartbeat(SendDurableExecutionCallbackHeartbeatRequest $args)
    {
        $result = parent::sendDurableExecutionCallbackHeartbeat($args->toArray());
        return new SendDurableExecutionCallbackHeartbeatResponse($result->toArray());
    }
}
