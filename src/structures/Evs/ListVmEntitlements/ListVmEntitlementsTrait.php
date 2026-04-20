<?php

namespace Sunaoka\Aws\Structures\Evs\ListVmEntitlements;

trait ListVmEntitlementsTrait
{
    /**
     * @param ListVmEntitlementsRequest $args
     * @return ListVmEntitlementsResponse
     */
    public function listVmEntitlements(ListVmEntitlementsRequest $args)
    {
        $result = parent::listVmEntitlements($args->toArray());
        return new ListVmEntitlementsResponse($result->toArray());
    }
}
