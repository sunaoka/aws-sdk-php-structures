<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateIntegratedResources;

trait UpdateIntegratedResourcesTrait
{
    /**
     * @param UpdateIntegratedResourcesRequest $args
     * @return UpdateIntegratedResourcesResponse
     */
    public function updateIntegratedResources(UpdateIntegratedResourcesRequest $args)
    {
        $result = parent::updateIntegratedResources($args->toArray());
        return new UpdateIntegratedResourcesResponse($result->toArray());
    }
}
