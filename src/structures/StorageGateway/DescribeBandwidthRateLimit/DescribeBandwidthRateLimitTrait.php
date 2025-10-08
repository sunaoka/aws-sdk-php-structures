<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeBandwidthRateLimit;

trait DescribeBandwidthRateLimitTrait
{
    /**
     * @param DescribeBandwidthRateLimitRequest $args
     * @return DescribeBandwidthRateLimitResponse
     */
    public function describeBandwidthRateLimit(DescribeBandwidthRateLimitRequest $args)
    {
        $result = parent::describeBandwidthRateLimit($args->toArray());
        return new DescribeBandwidthRateLimitResponse($result->toArray());
    }
}
