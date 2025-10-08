<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetBandwidthRateLimitSchedule;

trait GetBandwidthRateLimitScheduleTrait
{
    /**
     * @param GetBandwidthRateLimitScheduleRequest $args
     * @return GetBandwidthRateLimitScheduleResponse
     */
    public function getBandwidthRateLimitSchedule(GetBandwidthRateLimitScheduleRequest $args)
    {
        $result = parent::getBandwidthRateLimitSchedule($args->toArray());
        return new GetBandwidthRateLimitScheduleResponse($result->toArray());
    }
}
