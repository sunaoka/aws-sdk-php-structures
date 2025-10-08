<?php

namespace Sunaoka\Aws\Structures\BackupGateway\PutBandwidthRateLimitSchedule;

trait PutBandwidthRateLimitScheduleTrait
{
    /**
     * @param PutBandwidthRateLimitScheduleRequest $args
     * @return PutBandwidthRateLimitScheduleResponse
     */
    public function putBandwidthRateLimitSchedule(PutBandwidthRateLimitScheduleRequest $args)
    {
        $result = parent::putBandwidthRateLimitSchedule($args->toArray());
        return new PutBandwidthRateLimitScheduleResponse($result->toArray());
    }
}
