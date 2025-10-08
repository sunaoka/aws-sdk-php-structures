<?php

namespace Sunaoka\Aws\Structures\Appstream\DisassociateApplicationFromEntitlement;

trait DisassociateApplicationFromEntitlementTrait
{
    /**
     * @param DisassociateApplicationFromEntitlementRequest $args
     * @return DisassociateApplicationFromEntitlementResponse
     */
    public function disassociateApplicationFromEntitlement(DisassociateApplicationFromEntitlementRequest $args)
    {
        $result = parent::disassociateApplicationFromEntitlement($args->toArray());
        return new DisassociateApplicationFromEntitlementResponse($result->toArray());
    }
}
