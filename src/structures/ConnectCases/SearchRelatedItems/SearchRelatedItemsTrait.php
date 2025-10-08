<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems;

trait SearchRelatedItemsTrait
{
    /**
     * @param SearchRelatedItemsRequest $args
     * @return SearchRelatedItemsResponse
     */
    public function searchRelatedItems(SearchRelatedItemsRequest $args)
    {
        $result = parent::searchRelatedItems($args->toArray());
        return new SearchRelatedItemsResponse($result->toArray());
    }
}
