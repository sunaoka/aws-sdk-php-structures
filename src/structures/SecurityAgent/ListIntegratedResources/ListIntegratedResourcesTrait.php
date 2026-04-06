<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegratedResources;

trait ListIntegratedResourcesTrait
{
    /**
     * @param ListIntegratedResourcesRequest $args
     * @return ListIntegratedResourcesResponse
     */
    public function listIntegratedResources(ListIntegratedResourcesRequest $args)
    {
        $result = parent::listIntegratedResources($args->toArray());
        return new ListIntegratedResourcesResponse($result->toArray());
    }
}
