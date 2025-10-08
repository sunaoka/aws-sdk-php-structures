<?php

namespace Sunaoka\Aws\Structures\StorageGateway\RefreshCache;

trait RefreshCacheTrait
{
    /**
     * @param RefreshCacheRequest $args
     * @return RefreshCacheResponse
     */
    public function refreshCache(RefreshCacheRequest $args)
    {
        $result = parent::refreshCache($args->toArray());
        return new RefreshCacheResponse($result->toArray());
    }
}
