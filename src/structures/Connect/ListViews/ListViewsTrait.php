<?php

namespace Sunaoka\Aws\Structures\Connect\ListViews;

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
