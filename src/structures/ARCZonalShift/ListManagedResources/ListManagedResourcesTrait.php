<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\ListManagedResources;

trait ListManagedResourcesTrait
{
    /**
     * @param ListManagedResourcesRequest $args
     * @return ListManagedResourcesResponse
     */
    public function listManagedResources(ListManagedResourcesRequest $args)
    {
        $result = parent::listManagedResources($args->toArray());
        return new ListManagedResourcesResponse($result->toArray());
    }
}
