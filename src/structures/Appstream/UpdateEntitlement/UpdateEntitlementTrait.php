<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateEntitlement;

trait UpdateEntitlementTrait
{
    /**
     * @param UpdateEntitlementRequest $args
     * @return UpdateEntitlementResponse
     */
    public function updateEntitlement(UpdateEntitlementRequest $args)
    {
        $result = parent::updateEntitlement($args->toArray());
        return new UpdateEntitlementResponse($result->toArray());
    }
}
