<?php

namespace Sunaoka\Aws\Structures\ApiGateway\FlushStageCache;

trait FlushStageCacheTrait
{
    /**
     * @param FlushStageCacheRequest $args
     * @return void
     */
    public function flushStageCache(FlushStageCacheRequest $args)
    {
        parent::flushStageCache($args->toArray());
    }
}
