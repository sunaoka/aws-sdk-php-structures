<?php

namespace Sunaoka\Aws\Structures\Appstream\AssociateApplicationToEntitlement;

trait AssociateApplicationToEntitlementTrait
{
    /**
     * @param AssociateApplicationToEntitlementRequest $args
     * @return AssociateApplicationToEntitlementResponse
     */
    public function associateApplicationToEntitlement(AssociateApplicationToEntitlementRequest $args)
    {
        $result = parent::associateApplicationToEntitlement($args->toArray());
        return new AssociateApplicationToEntitlementResponse($result->toArray());
    }
}
