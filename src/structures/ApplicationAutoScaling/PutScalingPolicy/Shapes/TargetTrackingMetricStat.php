<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TargetTrackingMetric $Metric
 * @property string $Stat
 * @property string|null $Unit
 */
class TargetTrackingMetricStat extends Shape
{
    /**
     * @param array{
     *     Metric: TargetTrackingMetric,
     *     Stat: string,
     *     Unit?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
