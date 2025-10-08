<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileCache;

trait UpdateFileCacheTrait
{
    /**
     * @param UpdateFileCacheRequest $args
     * @return UpdateFileCacheResponse
     */
    public function updateFileCache(UpdateFileCacheRequest $args)
    {
        $result = parent::updateFileCache($args->toArray());
        return new UpdateFileCacheResponse($result->toArray());
    }
}
