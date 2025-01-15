<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2RecommendationProjectedMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceArn
 * @property 'Maximum'|'Average' $stat
 * @property int $period
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property Shapes\RecommendationPreferences|null $recommendationPreferences
 */
class GetEC2RecommendationProjectedMetricsRequest extends Request
{
    /**
     * @param array{
     *     instanceArn: string,
     *     stat: 'Maximum'|'Average',
     *     period: int,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     recommendationPreferences?: Shapes\RecommendationPreferences|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
