<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListApplicationShaderCaches;

trait ListApplicationShaderCachesTrait
{
    /**
     * @param ListApplicationShaderCachesRequest $args
     * @return ListApplicationShaderCachesResponse
     */
    public function listApplicationShaderCaches(ListApplicationShaderCachesRequest $args)
    {
        $result = parent::listApplicationShaderCaches($args->toArray());
        return new ListApplicationShaderCachesResponse($result->toArray());
    }
}
