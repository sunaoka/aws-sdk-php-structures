<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeBandwidthRateLimitSchedule;

trait DescribeBandwidthRateLimitScheduleTrait
{
    /**
     * @param DescribeBandwidthRateLimitScheduleRequest $args
     * @return DescribeBandwidthRateLimitScheduleResponse
     */
    public function describeBandwidthRateLimitSchedule(DescribeBandwidthRateLimitScheduleRequest $args)
    {
        $result = parent::describeBandwidthRateLimitSchedule($args->toArray());
        return new DescribeBandwidthRateLimitScheduleResponse($result->toArray());
    }
}
