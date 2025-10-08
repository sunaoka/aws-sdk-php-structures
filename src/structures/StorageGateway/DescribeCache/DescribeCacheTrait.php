<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeCache;

trait DescribeCacheTrait
{
    /**
     * @param DescribeCacheRequest $args
     * @return DescribeCacheResponse
     */
    public function describeCache(DescribeCacheRequest $args)
    {
        $result = parent::describeCache($args->toArray());
        return new DescribeCacheResponse($result->toArray());
    }
}
