<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListComputationModelResolveToResources;

trait ListComputationModelResolveToResourcesTrait
{
    /**
     * @param ListComputationModelResolveToResourcesRequest $args
     * @return ListComputationModelResolveToResourcesResponse
     */
    public function listComputationModelResolveToResources(ListComputationModelResolveToResourcesRequest $args)
    {
        $result = parent::listComputationModelResolveToResources($args->toArray());
        return new ListComputationModelResolveToResourcesResponse($result->toArray());
    }
}
