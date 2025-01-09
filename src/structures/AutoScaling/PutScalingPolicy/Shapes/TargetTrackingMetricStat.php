<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Metric $Metric
 * @property string $Stat
 * @property string $Unit
 * @property int $Period
 */
class TargetTrackingMetricStat extends Shape
{
    /**
     * @param array{
     *     Metric: Metric,
     *     Stat: string,
     *     Unit?: string,
     *     Period?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
