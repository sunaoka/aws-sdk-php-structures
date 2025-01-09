<?php

namespace Sunaoka\Aws\Structures\AutoScaling\GetPredictiveScalingForecast;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property string $PolicyName
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class GetPredictiveScalingForecastRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     PolicyName: string,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
