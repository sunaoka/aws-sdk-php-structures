<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchDataSets;

trait SearchDataSetsTrait
{
    /**
     * @param SearchDataSetsRequest $args
     * @return SearchDataSetsResponse
     */
    public function searchDataSets(SearchDataSetsRequest $args)
    {
        $result = parent::searchDataSets($args->toArray());
        return new SearchDataSetsResponse($result->toArray());
    }
}
