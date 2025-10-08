<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListElasticsearchVersions;

trait ListElasticsearchVersionsTrait
{
    /**
     * @param ListElasticsearchVersionsRequest $args
     * @return ListElasticsearchVersionsResponse
     */
    public function listElasticsearchVersions(ListElasticsearchVersionsRequest $args)
    {
        $result = parent::listElasticsearchVersions($args->toArray());
        return new ListElasticsearchVersionsResponse($result->toArray());
    }
}
