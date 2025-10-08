<?php

namespace Sunaoka\Aws\Structures\AppSync\FlushApiCache;

trait FlushApiCacheTrait
{
    /**
     * @param FlushApiCacheRequest $args
     * @return FlushApiCacheResponse
     */
    public function flushApiCache(FlushApiCacheRequest $args)
    {
        $result = parent::flushApiCache($args->toArray());
        return new FlushApiCacheResponse($result->toArray());
    }
}
