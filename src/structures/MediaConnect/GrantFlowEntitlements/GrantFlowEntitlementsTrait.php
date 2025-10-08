<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GrantFlowEntitlements;

trait GrantFlowEntitlementsTrait
{
    /**
     * @param GrantFlowEntitlementsRequest $args
     * @return GrantFlowEntitlementsResponse
     */
    public function grantFlowEntitlements(GrantFlowEntitlementsRequest $args)
    {
        $result = parent::grantFlowEntitlements($args->toArray());
        return new GrantFlowEntitlementsResponse($result->toArray());
    }
}
