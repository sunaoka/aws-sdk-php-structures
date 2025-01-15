<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PredictiveScalingMetric $Metric
 * @property string $Stat
 * @property string|null $Unit
 */
class PredictiveScalingMetricStat extends Shape
{
    /**
     * @param array{
     *     Metric: PredictiveScalingMetric,
     *     Stat: string,
     *     Unit?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
