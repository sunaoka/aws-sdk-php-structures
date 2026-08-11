<?php

namespace Sunaoka\Aws\Structures\AccountAccess\GetEntitlement;

trait GetEntitlementTrait
{
    /**
     * @param GetEntitlementRequest $args
     * @return GetEntitlementResponse
     */
    public function getEntitlement(GetEntitlementRequest $args)
    {
        $result = parent::getEntitlement($args->toArray());
        return new GetEntitlementResponse($result->toArray());
    }
}
