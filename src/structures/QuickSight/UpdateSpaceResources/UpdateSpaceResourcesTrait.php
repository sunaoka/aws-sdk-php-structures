<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateSpaceResources;

trait UpdateSpaceResourcesTrait
{
    /**
     * @param UpdateSpaceResourcesRequest $args
     * @return UpdateSpaceResourcesResponse
     */
    public function updateSpaceResources(UpdateSpaceResourcesRequest $args)
    {
        $result = parent::updateSpaceResources($args->toArray());
        return new UpdateSpaceResourcesResponse($result->toArray());
    }
}
