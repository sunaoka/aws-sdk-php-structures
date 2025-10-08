<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListViews;

trait ListViewsTrait
{
    /**
     * @param ListViewsRequest $args
     * @return ListViewsResponse
     */
    public function listViews(ListViewsRequest $args)
    {
        $result = parent::listViews($args->toArray());
        return new ListViewsResponse($result->toArray());
    }
}
