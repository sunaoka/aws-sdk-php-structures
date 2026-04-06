<?php

namespace Sunaoka\Aws\Structures\CloudTrail\SearchSampleQueries;

trait SearchSampleQueriesTrait
{
    /**
     * @param SearchSampleQueriesRequest $args
     * @return SearchSampleQueriesResponse
     */
    public function searchSampleQueries(SearchSampleQueriesRequest $args)
    {
        $result = parent::searchSampleQueries($args->toArray());
        return new SearchSampleQueriesResponse($result->toArray());
    }
}
