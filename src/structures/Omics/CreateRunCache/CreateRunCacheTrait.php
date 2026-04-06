<?php

namespace Sunaoka\Aws\Structures\Omics\CreateRunCache;

trait CreateRunCacheTrait
{
    /**
     * @param CreateRunCacheRequest $args
     * @return CreateRunCacheResponse
     */
    public function createRunCache(CreateRunCacheRequest $args)
    {
        $result = parent::createRunCache($args->toArray());
        return new CreateRunCacheResponse($result->toArray());
    }
}
