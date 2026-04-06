<?php

namespace Sunaoka\Aws\Structures\Batch\ListConsumableResources;

trait ListConsumableResourcesTrait
{
    /**
     * @param ListConsumableResourcesRequest $args
     * @return ListConsumableResourcesResponse
     */
    public function listConsumableResources(ListConsumableResourcesRequest $args)
    {
        $result = parent::listConsumableResources($args->toArray());
        return new ListConsumableResourcesResponse($result->toArray());
    }
}
