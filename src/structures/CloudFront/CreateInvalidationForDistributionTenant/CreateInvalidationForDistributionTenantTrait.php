<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateInvalidationForDistributionTenant;

trait CreateInvalidationForDistributionTenantTrait
{
    /**
     * @param CreateInvalidationForDistributionTenantRequest $args
     * @return CreateInvalidationForDistributionTenantResponse
     */
    public function createInvalidationForDistributionTenant(CreateInvalidationForDistributionTenantRequest $args)
    {
        $result = parent::createInvalidationForDistributionTenant($args->toArray());
        return new CreateInvalidationForDistributionTenantResponse($result->toArray());
    }
}
