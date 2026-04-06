<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateServerlessCache;

trait CreateServerlessCacheTrait
{
    /**
     * @param CreateServerlessCacheRequest $args
     * @return CreateServerlessCacheResponse
     */
    public function createServerlessCache(CreateServerlessCacheRequest $args)
    {
        $result = parent::createServerlessCache($args->toArray());
        return new CreateServerlessCacheResponse($result->toArray());
    }
}
