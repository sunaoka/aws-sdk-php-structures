<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDataSources;

trait ListDataSourcesTrait
{
    /**
     * @param ListDataSourcesRequest $args
     * @return ListDataSourcesResponse
     */
    public function listDataSources(ListDataSourcesRequest $args)
    {
        $result = parent::listDataSources($args->toArray());
        return new ListDataSourcesResponse($result->toArray());
    }
}
