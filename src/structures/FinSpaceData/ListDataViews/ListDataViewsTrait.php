<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListDataViews;

trait ListDataViewsTrait
{
    /**
     * @param ListDataViewsRequest $args
     * @return ListDataViewsResponse
     */
    public function listDataViews(ListDataViewsRequest $args)
    {
        $result = parent::listDataViews($args->toArray());
        return new ListDataViewsResponse($result->toArray());
    }
}
