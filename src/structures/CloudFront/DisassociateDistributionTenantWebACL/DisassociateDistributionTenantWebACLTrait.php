<?php

namespace Sunaoka\Aws\Structures\CloudFront\DisassociateDistributionTenantWebACL;

trait DisassociateDistributionTenantWebACLTrait
{
    /**
     * @param DisassociateDistributionTenantWebACLRequest $args
     * @return DisassociateDistributionTenantWebACLResponse
     */
    public function disassociateDistributionTenantWebACL(DisassociateDistributionTenantWebACLRequest $args)
    {
        $result = parent::disassociateDistributionTenantWebACL($args->toArray());
        return new DisassociateDistributionTenantWebACLResponse($result->toArray());
    }
}
