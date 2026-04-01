<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeregisterCapability;

trait DeregisterCapabilityTrait
{
    /**
     * @param DeregisterCapabilityRequest $args
     * @return DeregisterCapabilityResponse
     */
    public function deregisterCapability(DeregisterCapabilityRequest $args)
    {
        $result = parent::deregisterCapability($args->toArray());
        return new DeregisterCapabilityResponse($result->toArray());
    }
}
