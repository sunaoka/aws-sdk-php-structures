<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListSpaceResources;

trait ListSpaceResourcesTrait
{
    /**
     * @param ListSpaceResourcesRequest $args
     * @return ListSpaceResourcesResponse
     */
    public function listSpaceResources(ListSpaceResourcesRequest $args)
    {
        $result = parent::listSpaceResources($args->toArray());
        return new ListSpaceResourcesResponse($result->toArray());
    }
}
