<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchDataSources;

trait SearchDataSourcesTrait
{
    /**
     * @param SearchDataSourcesRequest $args
     * @return SearchDataSourcesResponse
     */
    public function searchDataSources(SearchDataSourcesRequest $args)
    {
        $result = parent::searchDataSources($args->toArray());
        return new SearchDataSourcesResponse($result->toArray());
    }
}
