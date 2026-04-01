<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\RegisterCapability;

trait RegisterCapabilityTrait
{
    /**
     * @param RegisterCapabilityRequest $args
     * @return RegisterCapabilityResponse
     */
    public function registerCapability(RegisterCapabilityRequest $args)
    {
        $result = parent::registerCapability($args->toArray());
        return new RegisterCapabilityResponse($result->toArray());
    }
}
