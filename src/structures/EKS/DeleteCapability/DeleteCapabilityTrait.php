<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteCapability;

trait DeleteCapabilityTrait
{
    /**
     * @param DeleteCapabilityRequest $args
     * @return DeleteCapabilityResponse
     */
    public function deleteCapability(DeleteCapabilityRequest $args)
    {
        $result = parent::deleteCapability($args->toArray());
        return new DeleteCapabilityResponse($result->toArray());
    }
}
