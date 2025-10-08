<?php

namespace Sunaoka\Aws\Structures\MarketplaceEntitlementService\GetEntitlements;

trait GetEntitlementsTrait
{
    /**
     * @param GetEntitlementsRequest $args
     * @return GetEntitlementsResponse
     */
    public function getEntitlements(GetEntitlementsRequest $args)
    {
        $result = parent::getEntitlements($args->toArray());
        return new GetEntitlementsResponse($result->toArray());
    }
}
