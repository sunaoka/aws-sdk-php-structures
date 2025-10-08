<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteBandwidthRateLimit;

trait DeleteBandwidthRateLimitTrait
{
    /**
     * @param DeleteBandwidthRateLimitRequest $args
     * @return DeleteBandwidthRateLimitResponse
     */
    public function deleteBandwidthRateLimit(DeleteBandwidthRateLimitRequest $args)
    {
        $result = parent::deleteBandwidthRateLimit($args->toArray());
        return new DeleteBandwidthRateLimitResponse($result->toArray());
    }
}
