<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistributionTenant;

trait GetDistributionTenantTrait
{
    /**
     * @param GetDistributionTenantRequest $args
     * @return GetDistributionTenantResponse
     */
    public function getDistributionTenant(GetDistributionTenantRequest $args)
    {
        $result = parent::getDistributionTenant($args->toArray());
        return new GetDistributionTenantResponse($result->toArray());
    }
}
