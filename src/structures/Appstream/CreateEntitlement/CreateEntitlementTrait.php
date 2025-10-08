<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateEntitlement;

trait CreateEntitlementTrait
{
    /**
     * @param CreateEntitlementRequest $args
     * @return CreateEntitlementResponse
     */
    public function createEntitlement(CreateEntitlementRequest $args)
    {
        $result = parent::createEntitlement($args->toArray());
        return new CreateEntitlementResponse($result->toArray());
    }
}
