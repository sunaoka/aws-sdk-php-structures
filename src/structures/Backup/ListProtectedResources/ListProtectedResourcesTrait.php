<?php

namespace Sunaoka\Aws\Structures\Backup\ListProtectedResources;

trait ListProtectedResourcesTrait
{
    /**
     * @param ListProtectedResourcesRequest $args
     * @return ListProtectedResourcesResponse
     */
    public function listProtectedResources(ListProtectedResourcesRequest $args)
    {
        $result = parent::listProtectedResources($args->toArray());
        return new ListProtectedResourcesResponse($result->toArray());
    }
}
