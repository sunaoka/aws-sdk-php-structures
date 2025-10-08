<?php

namespace Sunaoka\Aws\Structures\AppSync\DeleteApiCache;

trait DeleteApiCacheTrait
{
    /**
     * @param DeleteApiCacheRequest $args
     * @return DeleteApiCacheResponse
     */
    public function deleteApiCache(DeleteApiCacheRequest $args)
    {
        $result = parent::deleteApiCache($args->toArray());
        return new DeleteApiCacheResponse($result->toArray());
    }
}
