<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistributionTenant;

trait CreateDistributionTenantTrait
{
    /**
     * @param CreateDistributionTenantRequest $args
     * @return CreateDistributionTenantResponse
     */
    public function createDistributionTenant(CreateDistributionTenantRequest $args)
    {
        $result = parent::createDistributionTenant($args->toArray());
        return new CreateDistributionTenantResponse($result->toArray());
    }
}
