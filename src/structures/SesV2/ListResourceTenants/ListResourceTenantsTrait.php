<?php

namespace Sunaoka\Aws\Structures\SesV2\ListResourceTenants;

trait ListResourceTenantsTrait
{
    /**
     * @param ListResourceTenantsRequest $args
     * @return ListResourceTenantsResponse
     */
    public function listResourceTenants(ListResourceTenantsRequest $args)
    {
        $result = parent::listResourceTenants($args->toArray());
        return new ListResourceTenantsResponse($result->toArray());
    }
}
