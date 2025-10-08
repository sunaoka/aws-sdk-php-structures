<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteServerlessCache;

trait DeleteServerlessCacheTrait
{
    /**
     * @param DeleteServerlessCacheRequest $args
     * @return DeleteServerlessCacheResponse
     */
    public function deleteServerlessCache(DeleteServerlessCacheRequest $args)
    {
        $result = parent::deleteServerlessCache($args->toArray());
        return new DeleteServerlessCacheResponse($result->toArray());
    }
}
