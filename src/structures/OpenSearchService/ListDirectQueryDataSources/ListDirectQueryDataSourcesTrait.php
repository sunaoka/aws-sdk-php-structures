<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDirectQueryDataSources;

trait ListDirectQueryDataSourcesTrait
{
    /**
     * @param ListDirectQueryDataSourcesRequest $args
     * @return ListDirectQueryDataSourcesResponse
     */
    public function listDirectQueryDataSources(ListDirectQueryDataSourcesRequest $args)
    {
        $result = parent::listDirectQueryDataSources($args->toArray());
        return new ListDirectQueryDataSourcesResponse($result->toArray());
    }
}
