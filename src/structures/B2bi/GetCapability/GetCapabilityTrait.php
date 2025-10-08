<?php

namespace Sunaoka\Aws\Structures\B2bi\GetCapability;

trait GetCapabilityTrait
{
    /**
     * @param GetCapabilityRequest $args
     * @return GetCapabilityResponse
     */
    public function getCapability(GetCapabilityRequest $args)
    {
        $result = parent::getCapability($args->toArray());
        return new GetCapabilityResponse($result->toArray());
    }
}
