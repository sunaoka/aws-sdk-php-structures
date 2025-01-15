<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendationProjectedMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property 'Maximum'|'Average' $stat
 * @property int $period
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property Shapes\RecommendationPreferences|null $recommendationPreferences
 */
class GetRDSDatabaseRecommendationProjectedMetricsRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
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
