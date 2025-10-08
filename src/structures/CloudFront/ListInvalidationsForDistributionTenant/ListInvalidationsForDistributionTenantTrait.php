<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListInvalidationsForDistributionTenant;

trait ListInvalidationsForDistributionTenantTrait
{
    /**
     * @param ListInvalidationsForDistributionTenantRequest $args
     * @return ListInvalidationsForDistributionTenantResponse
     */
    public function listInvalidationsForDistributionTenant(ListInvalidationsForDistributionTenantRequest $args)
    {
        $result = parent::listInvalidationsForDistributionTenant($args->toArray());
        return new ListInvalidationsForDistributionTenantResponse($result->toArray());
    }
}
