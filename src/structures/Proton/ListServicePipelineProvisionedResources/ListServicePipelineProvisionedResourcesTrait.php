<?php

namespace Sunaoka\Aws\Structures\Proton\ListServicePipelineProvisionedResources;

trait ListServicePipelineProvisionedResourcesTrait
{
    /**
     * @param ListServicePipelineProvisionedResourcesRequest $args
     * @return ListServicePipelineProvisionedResourcesResponse
     */
    public function listServicePipelineProvisionedResources(ListServicePipelineProvisionedResourcesRequest $args)
    {
        $result = parent::listServicePipelineProvisionedResources($args->toArray());
        return new ListServicePipelineProvisionedResourcesResponse($result->toArray());
    }
}
