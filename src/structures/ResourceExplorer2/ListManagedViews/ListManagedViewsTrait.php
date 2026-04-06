<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListManagedViews;

trait ListManagedViewsTrait
{
    /**
     * @param ListManagedViewsRequest $args
     * @return ListManagedViewsResponse
     */
    public function listManagedViews(ListManagedViewsRequest $args)
    {
        $result = parent::listManagedViews($args->toArray());
        return new ListManagedViewsResponse($result->toArray());
    }
}
