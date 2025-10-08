<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowEntitlement;

trait UpdateFlowEntitlementTrait
{
    /**
     * @param UpdateFlowEntitlementRequest $args
     * @return UpdateFlowEntitlementResponse
     */
    public function updateFlowEntitlement(UpdateFlowEntitlementRequest $args)
    {
        $result = parent::updateFlowEntitlement($args->toArray());
        return new UpdateFlowEntitlementResponse($result->toArray());
    }
}
