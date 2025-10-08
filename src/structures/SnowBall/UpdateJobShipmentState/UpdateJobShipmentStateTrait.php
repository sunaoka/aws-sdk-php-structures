<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateJobShipmentState;

trait UpdateJobShipmentStateTrait
{
    /**
     * @param UpdateJobShipmentStateRequest $args
     * @return UpdateJobShipmentStateResponse
     */
    public function updateJobShipmentState(UpdateJobShipmentStateRequest $args)
    {
        $result = parent::updateJobShipmentState($args->toArray());
        return new UpdateJobShipmentStateResponse($result->toArray());
    }
}
