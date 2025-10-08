<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListElasticsearchInstanceTypes;

trait ListElasticsearchInstanceTypesTrait
{
    /**
     * @param ListElasticsearchInstanceTypesRequest $args
     * @return ListElasticsearchInstanceTypesResponse
     */
    public function listElasticsearchInstanceTypes(ListElasticsearchInstanceTypesRequest $args)
    {
        $result = parent::listElasticsearchInstanceTypes($args->toArray());
        return new ListElasticsearchInstanceTypesResponse($result->toArray());
    }
}
