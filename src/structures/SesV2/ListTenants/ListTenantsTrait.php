<?php

namespace Sunaoka\Aws\Structures\SesV2\ListTenants;

trait ListTenantsTrait
{
    /**
     * @param ListTenantsRequest $args
     * @return ListTenantsResponse
     */
    public function listTenants(ListTenantsRequest $args)
    {
        $result = parent::listTenants($args->toArray());
        return new ListTenantsResponse($result->toArray());
    }
}
