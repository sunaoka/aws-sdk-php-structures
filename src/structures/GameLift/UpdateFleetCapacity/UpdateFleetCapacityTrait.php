<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateFleetCapacity;

trait UpdateFleetCapacityTrait
{
    /**
     * @param UpdateFleetCapacityRequest $args
     * @return UpdateFleetCapacityResponse
     */
    public function updateFleetCapacity(UpdateFleetCapacityRequest $args)
    {
        $result = parent::updateFleetCapacity($args->toArray());
        return new UpdateFleetCapacityResponse($result->toArray());
    }
}
