<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributionLatestCacheReset;

trait GetDistributionLatestCacheResetTrait
{
    /**
     * @param GetDistributionLatestCacheResetRequest $args
     * @return GetDistributionLatestCacheResetResponse
     */
    public function getDistributionLatestCacheReset(GetDistributionLatestCacheResetRequest $args)
    {
        $result = parent::getDistributionLatestCacheReset($args->toArray());
        return new GetDistributionLatestCacheResetResponse($result->toArray());
    }
}
