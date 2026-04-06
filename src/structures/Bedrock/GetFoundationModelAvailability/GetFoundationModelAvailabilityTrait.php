<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetFoundationModelAvailability;

trait GetFoundationModelAvailabilityTrait
{
    /**
     * @param GetFoundationModelAvailabilityRequest $args
     * @return GetFoundationModelAvailabilityResponse
     */
    public function getFoundationModelAvailability(GetFoundationModelAvailabilityRequest $args)
    {
        $result = parent::getFoundationModelAvailability($args->toArray());
        return new GetFoundationModelAvailabilityResponse($result->toArray());
    }
}
