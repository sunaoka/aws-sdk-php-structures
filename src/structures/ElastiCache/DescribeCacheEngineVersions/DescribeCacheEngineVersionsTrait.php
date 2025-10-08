<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheEngineVersions;

trait DescribeCacheEngineVersionsTrait
{
    /**
     * @param DescribeCacheEngineVersionsRequest $args
     * @return DescribeCacheEngineVersionsResponse
     */
    public function describeCacheEngineVersions(DescribeCacheEngineVersionsRequest $args)
    {
        $result = parent::describeCacheEngineVersions($args->toArray());
        return new DescribeCacheEngineVersionsResponse($result->toArray());
    }
}
