<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetInvalidationForDistributionTenant;

trait GetInvalidationForDistributionTenantTrait
{
    /**
     * @param GetInvalidationForDistributionTenantRequest $args
     * @return GetInvalidationForDistributionTenantResponse
     */
    public function getInvalidationForDistributionTenant(GetInvalidationForDistributionTenantRequest $args)
    {
        $result = parent::getInvalidationForDistributionTenant($args->toArray());
        return new GetInvalidationForDistributionTenantResponse($result->toArray());
    }
}
