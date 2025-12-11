<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateCapability;

trait UpdateCapabilityTrait
{
    /**
     * @param UpdateCapabilityRequest $args
     * @return UpdateCapabilityResponse
     */
    public function updateCapability(UpdateCapabilityRequest $args)
    {
        $result = parent::updateCapability($args->toArray());
        return new UpdateCapabilityResponse($result->toArray());
    }
}
