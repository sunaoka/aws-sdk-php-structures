<?php

namespace Sunaoka\Aws\Structures\CloudFront\AssociateDistributionTenantWebACL;

trait AssociateDistributionTenantWebACLTrait
{
    /**
     * @param AssociateDistributionTenantWebACLRequest $args
     * @return AssociateDistributionTenantWebACLResponse
     */
    public function associateDistributionTenantWebACL(AssociateDistributionTenantWebACLRequest $args)
    {
        $result = parent::associateDistributionTenantWebACL($args->toArray());
        return new AssociateDistributionTenantWebACLResponse($result->toArray());
    }
}
