<?php

namespace Sunaoka\Aws\Structures\Connect\SearchViews;

trait SearchViewsTrait
{
    /**
     * @param SearchViewsRequest $args
     * @return SearchViewsResponse
     */
    public function searchViews(SearchViewsRequest $args)
    {
        $result = parent::searchViews($args->toArray());
        return new SearchViewsResponse($result->toArray());
    }
}
