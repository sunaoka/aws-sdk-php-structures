<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\UpdateRoutingControl;

trait UpdateRoutingControlTrait
{
    /**
     * @param UpdateRoutingControlRequest $args
     * @return UpdateRoutingControlResponse
     */
    public function updateRoutingControl(UpdateRoutingControlRequest $args)
    {
        $result = parent::updateRoutingControl($args->toArray());
        return new UpdateRoutingControlResponse($result->toArray());
    }
}
