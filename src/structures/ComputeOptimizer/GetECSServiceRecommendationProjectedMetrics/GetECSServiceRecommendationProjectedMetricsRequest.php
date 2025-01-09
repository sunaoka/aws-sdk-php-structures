<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendationProjectedMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property 'Maximum'|'Average' $stat
 * @property int $period
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 */
class GetECSServiceRecommendationProjectedMetricsRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     stat: 'Maximum'|'Average',
     *     period: int,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
