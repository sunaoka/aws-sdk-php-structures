<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\CreateRoutingControl;

trait CreateRoutingControlTrait
{
    /**
     * @param CreateRoutingControlRequest $args
     * @return CreateRoutingControlResponse
     */
    public function createRoutingControl(CreateRoutingControlRequest $args)
    {
        $result = parent::createRoutingControl($args->toArray());
        return new CreateRoutingControlResponse($result->toArray());
    }
}
