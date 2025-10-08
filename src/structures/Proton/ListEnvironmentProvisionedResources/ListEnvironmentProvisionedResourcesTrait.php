<?php

namespace Sunaoka\Aws\Structures\Proton\ListEnvironmentProvisionedResources;

trait ListEnvironmentProvisionedResourcesTrait
{
    /**
     * @param ListEnvironmentProvisionedResourcesRequest $args
     * @return ListEnvironmentProvisionedResourcesResponse
     */
    public function listEnvironmentProvisionedResources(ListEnvironmentProvisionedResourcesRequest $args)
    {
        $result = parent::listEnvironmentProvisionedResources($args->toArray());
        return new ListEnvironmentProvisionedResourcesResponse($result->toArray());
    }
}
