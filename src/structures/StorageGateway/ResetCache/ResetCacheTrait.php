<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ResetCache;

trait ResetCacheTrait
{
    /**
     * @param ResetCacheRequest $args
     * @return ResetCacheResponse
     */
    public function resetCache(ResetCacheRequest $args)
    {
        $result = parent::resetCache($args->toArray());
        return new ResetCacheResponse($result->toArray());
    }
}
