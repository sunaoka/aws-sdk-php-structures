<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RevokeFlowEntitlement;

trait RevokeFlowEntitlementTrait
{
    /**
     * @param RevokeFlowEntitlementRequest $args
     * @return RevokeFlowEntitlementResponse
     */
    public function revokeFlowEntitlement(RevokeFlowEntitlementRequest $args)
    {
        $result = parent::revokeFlowEntitlement($args->toArray());
        return new RevokeFlowEntitlementResponse($result->toArray());
    }
}
