<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateBandwidthRateLimit;

trait UpdateBandwidthRateLimitTrait
{
    /**
     * @param UpdateBandwidthRateLimitRequest $args
     * @return UpdateBandwidthRateLimitResponse
     */
    public function updateBandwidthRateLimit(UpdateBandwidthRateLimitRequest $args)
    {
        $result = parent::updateBandwidthRateLimit($args->toArray());
        return new UpdateBandwidthRateLimitResponse($result->toArray());
    }
}
