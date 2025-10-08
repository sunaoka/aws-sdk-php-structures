<?php

namespace Sunaoka\Aws\Structures\AppSync\GetApiCache;

trait GetApiCacheTrait
{
    /**
     * @param GetApiCacheRequest $args
     * @return GetApiCacheResponse
     */
    public function getApiCache(GetApiCacheRequest $args)
    {
        $result = parent::getApiCache($args->toArray());
        return new GetApiCacheResponse($result->toArray());
    }
}
