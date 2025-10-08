<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteFileCache;

trait DeleteFileCacheTrait
{
    /**
     * @param DeleteFileCacheRequest $args
     * @return DeleteFileCacheResponse
     */
    public function deleteFileCache(DeleteFileCacheRequest $args)
    {
        $result = parent::deleteFileCache($args->toArray());
        return new DeleteFileCacheResponse($result->toArray());
    }
}
