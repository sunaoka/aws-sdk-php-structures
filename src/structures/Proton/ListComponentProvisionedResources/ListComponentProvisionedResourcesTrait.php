<?php

namespace Sunaoka\Aws\Structures\Proton\ListComponentProvisionedResources;

trait ListComponentProvisionedResourcesTrait
{
    /**
     * @param ListComponentProvisionedResourcesRequest $args
     * @return ListComponentProvisionedResourcesResponse
     */
    public function listComponentProvisionedResources(ListComponentProvisionedResourcesRequest $args)
    {
        $result = parent::listComponentProvisionedResources($args->toArray());
        return new ListComponentProvisionedResourcesResponse($result->toArray());
    }
}
