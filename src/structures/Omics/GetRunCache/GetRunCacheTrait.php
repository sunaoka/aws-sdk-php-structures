<?php

namespace Sunaoka\Aws\Structures\Omics\GetRunCache;

trait GetRunCacheTrait
{
    /**
     * @param GetRunCacheRequest $args
     * @return GetRunCacheResponse
     */
    public function getRunCache(GetRunCacheRequest $args)
    {
        $result = parent::getRunCache($args->toArray());
        return new GetRunCacheResponse($result->toArray());
    }
}
