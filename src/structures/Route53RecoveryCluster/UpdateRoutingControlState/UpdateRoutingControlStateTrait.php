<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryCluster\UpdateRoutingControlState;

trait UpdateRoutingControlStateTrait
{
    /**
     * @param UpdateRoutingControlStateRequest $args
     * @return UpdateRoutingControlStateResponse
     */
    public function updateRoutingControlState(UpdateRoutingControlStateRequest $args)
    {
        $result = parent::updateRoutingControlState($args->toArray());
        return new UpdateRoutingControlStateResponse($result->toArray());
    }
}
