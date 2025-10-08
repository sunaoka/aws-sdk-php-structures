<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryCluster\UpdateRoutingControlStates;

trait UpdateRoutingControlStatesTrait
{
    /**
     * @param UpdateRoutingControlStatesRequest $args
     * @return UpdateRoutingControlStatesResponse
     */
    public function updateRoutingControlStates(UpdateRoutingControlStatesRequest $args)
    {
        $result = parent::updateRoutingControlStates($args->toArray());
        return new UpdateRoutingControlStatesResponse($result->toArray());
    }
}
