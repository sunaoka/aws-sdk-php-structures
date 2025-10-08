<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistributionTenantByDomain;

trait GetDistributionTenantByDomainTrait
{
    /**
     * @param GetDistributionTenantByDomainRequest $args
     * @return GetDistributionTenantByDomainResponse
     */
    public function getDistributionTenantByDomain(GetDistributionTenantByDomainRequest $args)
    {
        $result = parent::getDistributionTenantByDomain($args->toArray());
        return new GetDistributionTenantByDomainResponse($result->toArray());
    }
}
