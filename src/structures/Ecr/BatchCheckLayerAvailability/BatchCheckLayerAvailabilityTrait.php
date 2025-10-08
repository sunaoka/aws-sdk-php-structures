<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchCheckLayerAvailability;

trait BatchCheckLayerAvailabilityTrait
{
    /**
     * @param BatchCheckLayerAvailabilityRequest $args
     * @return BatchCheckLayerAvailabilityResponse
     */
    public function batchCheckLayerAvailability(BatchCheckLayerAvailabilityRequest $args)
    {
        $result = parent::batchCheckLayerAvailability($args->toArray());
        return new BatchCheckLayerAvailabilityResponse($result->toArray());
    }
}
