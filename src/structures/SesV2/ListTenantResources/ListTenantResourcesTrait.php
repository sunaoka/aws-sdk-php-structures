<?php

namespace Sunaoka\Aws\Structures\SesV2\ListTenantResources;

trait ListTenantResourcesTrait
{
    /**
     * @param ListTenantResourcesRequest $args
     * @return ListTenantResourcesResponse
     */
    public function listTenantResources(ListTenantResourcesRequest $args)
    {
        $result = parent::listTenantResources($args->toArray());
        return new ListTenantResourcesResponse($result->toArray());
    }
}
