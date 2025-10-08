<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateApiCache;

trait UpdateApiCacheTrait
{
    /**
     * @param UpdateApiCacheRequest $args
     * @return UpdateApiCacheResponse
     */
    public function updateApiCache(UpdateApiCacheRequest $args)
    {
        $result = parent::updateApiCache($args->toArray());
        return new UpdateApiCacheResponse($result->toArray());
    }
}
