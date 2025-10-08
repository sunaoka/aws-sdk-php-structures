<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryCluster\GetRoutingControlState;

trait GetRoutingControlStateTrait
{
    /**
     * @param GetRoutingControlStateRequest $args
     * @return GetRoutingControlStateResponse
     */
    public function getRoutingControlState(GetRoutingControlStateRequest $args)
    {
        $result = parent::getRoutingControlState($args->toArray());
        return new GetRoutingControlStateResponse($result->toArray());
    }
}
