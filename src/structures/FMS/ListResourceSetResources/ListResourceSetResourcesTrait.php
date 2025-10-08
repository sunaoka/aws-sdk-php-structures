<?php

namespace Sunaoka\Aws\Structures\FMS\ListResourceSetResources;

trait ListResourceSetResourcesTrait
{
    /**
     * @param ListResourceSetResourcesRequest $args
     * @return ListResourceSetResourcesResponse
     */
    public function listResourceSetResources(ListResourceSetResourcesRequest $args)
    {
        $result = parent::listResourceSetResources($args->toArray());
        return new ListResourceSetResourcesResponse($result->toArray());
    }
}
