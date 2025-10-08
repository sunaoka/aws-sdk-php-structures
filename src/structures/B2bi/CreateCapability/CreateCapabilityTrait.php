<?php

namespace Sunaoka\Aws\Structures\B2bi\CreateCapability;

trait CreateCapabilityTrait
{
    /**
     * @param CreateCapabilityRequest $args
     * @return CreateCapabilityResponse
     */
    public function createCapability(CreateCapabilityRequest $args)
    {
        $result = parent::createCapability($args->toArray());
        return new CreateCapabilityResponse($result->toArray());
    }
}
