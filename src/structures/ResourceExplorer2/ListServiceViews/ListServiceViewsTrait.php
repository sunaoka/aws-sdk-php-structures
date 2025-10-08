<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListServiceViews;

trait ListServiceViewsTrait
{
    /**
     * @param ListServiceViewsRequest $args
     * @return ListServiceViewsResponse
     */
    public function listServiceViews(ListServiceViewsRequest $args)
    {
        $result = parent::listServiceViews($args->toArray());
        return new ListServiceViewsResponse($result->toArray());
    }
}
