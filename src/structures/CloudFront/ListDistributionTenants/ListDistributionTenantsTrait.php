<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionTenants;

trait ListDistributionTenantsTrait
{
    /**
     * @param ListDistributionTenantsRequest $args
     * @return ListDistributionTenantsResponse
     */
    public function listDistributionTenants(ListDistributionTenantsRequest $args)
    {
        $result = parent::listDistributionTenants($args->toArray());
        return new ListDistributionTenantsResponse($result->toArray());
    }
}
