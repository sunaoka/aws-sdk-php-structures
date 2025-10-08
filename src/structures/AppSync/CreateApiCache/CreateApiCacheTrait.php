<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateApiCache;

trait CreateApiCacheTrait
{
    /**
     * @param CreateApiCacheRequest $args
     * @return CreateApiCacheResponse
     */
    public function createApiCache(CreateApiCacheRequest $args)
    {
        $result = parent::createApiCache($args->toArray());
        return new CreateApiCacheResponse($result->toArray());
    }
}
