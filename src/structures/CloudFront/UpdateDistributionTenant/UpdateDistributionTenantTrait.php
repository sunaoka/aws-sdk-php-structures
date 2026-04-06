<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistributionTenant;

trait UpdateDistributionTenantTrait
{
    /**
     * @param UpdateDistributionTenantRequest $args
     * @return UpdateDistributionTenantResponse
     */
    public function updateDistributionTenant(UpdateDistributionTenantRequest $args)
    {
        $result = parent::updateDistributionTenant($args->toArray());
        return new UpdateDistributionTenantResponse($result->toArray());
    }
}
