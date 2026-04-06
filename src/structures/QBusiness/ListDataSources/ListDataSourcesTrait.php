<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDataSources;

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
