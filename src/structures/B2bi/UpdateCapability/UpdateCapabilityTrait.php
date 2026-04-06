<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateCapability;

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
