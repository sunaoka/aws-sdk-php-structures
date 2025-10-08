<?php

namespace Sunaoka\Aws\Structures\Lightsail\ResetDistributionCache;

trait ResetDistributionCacheTrait
{
    /**
     * @param ResetDistributionCacheRequest $args
     * @return ResetDistributionCacheResponse
     */
    public function resetDistributionCache(ResetDistributionCacheRequest $args)
    {
        $result = parent::resetDistributionCache($args->toArray());
        return new ResetDistributionCacheResponse($result->toArray());
    }
}
