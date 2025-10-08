<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyServerlessCache;

trait ModifyServerlessCacheTrait
{
    /**
     * @param ModifyServerlessCacheRequest $args
     * @return ModifyServerlessCacheResponse
     */
    public function modifyServerlessCache(ModifyServerlessCacheRequest $args)
    {
        $result = parent::modifyServerlessCache($args->toArray());
        return new ModifyServerlessCacheResponse($result->toArray());
    }
}
