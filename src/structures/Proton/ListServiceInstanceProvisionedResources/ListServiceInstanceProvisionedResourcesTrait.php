<?php

namespace Sunaoka\Aws\Structures\Proton\ListServiceInstanceProvisionedResources;

trait ListServiceInstanceProvisionedResourcesTrait
{
    /**
     * @param ListServiceInstanceProvisionedResourcesRequest $args
     * @return ListServiceInstanceProvisionedResourcesResponse
     */
    public function listServiceInstanceProvisionedResources(ListServiceInstanceProvisionedResourcesRequest $args)
    {
        $result = parent::listServiceInstanceProvisionedResources($args->toArray());
        return new ListServiceInstanceProvisionedResourcesResponse($result->toArray());
    }
}
