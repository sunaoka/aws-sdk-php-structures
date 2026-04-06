<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchAllRelatedItems;

trait SearchAllRelatedItemsTrait
{
    /**
     * @param SearchAllRelatedItemsRequest $args
     * @return SearchAllRelatedItemsResponse
     */
    public function searchAllRelatedItems(SearchAllRelatedItemsRequest $args)
    {
        $result = parent::searchAllRelatedItems($args->toArray());
        return new SearchAllRelatedItemsResponse($result->toArray());
    }
}
