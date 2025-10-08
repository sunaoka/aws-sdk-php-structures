<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\DeleteRoutingControl;

trait DeleteRoutingControlTrait
{
    /**
     * @param DeleteRoutingControlRequest $args
     * @return DeleteRoutingControlResponse
     */
    public function deleteRoutingControl(DeleteRoutingControlRequest $args)
    {
        $result = parent::deleteRoutingControl($args->toArray());
        return new DeleteRoutingControlResponse($result->toArray());
    }
}
