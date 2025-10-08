<?php

namespace Sunaoka\Aws\Structures\StorageGateway\AddCache;

trait AddCacheTrait
{
    /**
     * @param AddCacheRequest $args
     * @return AddCacheResponse
     */
    public function addCache(AddCacheRequest $args)
    {
        $result = parent::addCache($args->toArray());
        return new AddCacheResponse($result->toArray());
    }
}
