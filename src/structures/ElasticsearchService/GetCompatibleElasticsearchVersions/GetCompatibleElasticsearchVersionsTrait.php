<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\GetCompatibleElasticsearchVersions;

trait GetCompatibleElasticsearchVersionsTrait
{
    /**
     * @param GetCompatibleElasticsearchVersionsRequest $args
     * @return GetCompatibleElasticsearchVersionsResponse
     */
    public function getCompatibleElasticsearchVersions(GetCompatibleElasticsearchVersionsRequest $args)
    {
        $result = parent::getCompatibleElasticsearchVersions($args->toArray());
        return new GetCompatibleElasticsearchVersionsResponse($result->toArray());
    }
}
