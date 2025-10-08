<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateBandwidthRateLimitSchedule;

trait UpdateBandwidthRateLimitScheduleTrait
{
    /**
     * @param UpdateBandwidthRateLimitScheduleRequest $args
     * @return UpdateBandwidthRateLimitScheduleResponse
     */
    public function updateBandwidthRateLimitSchedule(UpdateBandwidthRateLimitScheduleRequest $args)
    {
        $result = parent::updateBandwidthRateLimitSchedule($args->toArray());
        return new UpdateBandwidthRateLimitScheduleResponse($result->toArray());
    }
}
