<?php

namespace Sunaoka\Aws\Structures\ApiGateway\FlushStageAuthorizersCache;

trait FlushStageAuthorizersCacheTrait
{
    /**
     * @param FlushStageAuthorizersCacheRequest $args
     * @return void
     */
    public function flushStageAuthorizersCache(FlushStageAuthorizersCacheRequest $args)
    {
        parent::flushStageAuthorizersCache($args->toArray());
    }
}
