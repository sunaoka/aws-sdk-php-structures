<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileCache;

trait CreateFileCacheTrait
{
    /**
     * @param CreateFileCacheRequest $args
     * @return CreateFileCacheResponse
     */
    public function createFileCache(CreateFileCacheRequest $args)
    {
        $result = parent::createFileCache($args->toArray());
        return new CreateFileCacheResponse($result->toArray());
    }
}
