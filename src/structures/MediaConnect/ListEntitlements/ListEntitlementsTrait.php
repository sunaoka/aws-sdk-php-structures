<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListEntitlements;

trait ListEntitlementsTrait
{
    /**
     * @param ListEntitlementsRequest $args
     * @return ListEntitlementsResponse
     */
    public function listEntitlements(ListEntitlementsRequest $args)
    {
        $result = parent::listEntitlements($args->toArray());
        return new ListEntitlementsResponse($result->toArray());
    }
}
