<?php

namespace Sunaoka\Aws\Structures\CodeBuild\InvalidateProjectCache;

trait InvalidateProjectCacheTrait
{
    /**
     * @param InvalidateProjectCacheRequest $args
     * @return InvalidateProjectCacheResponse
     */
    public function invalidateProjectCache(InvalidateProjectCacheRequest $args)
    {
        $result = parent::invalidateProjectCache($args->toArray());
        return new InvalidateProjectCacheResponse($result->toArray());
    }
}
