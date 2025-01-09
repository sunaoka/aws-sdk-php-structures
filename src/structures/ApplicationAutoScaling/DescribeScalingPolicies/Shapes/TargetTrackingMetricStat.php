<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TargetTrackingMetric $Metric
 * @property string $Stat
 * @property string $Unit
 */
class TargetTrackingMetricStat extends Shape
{
    /**
     * @param array{
     *     Metric: TargetTrackingMetric,
     *     Stat: string,
     *     Unit?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
