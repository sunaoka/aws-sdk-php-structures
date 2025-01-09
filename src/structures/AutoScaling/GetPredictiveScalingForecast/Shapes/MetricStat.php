<?php

namespace Sunaoka\Aws\Structures\AutoScaling\GetPredictiveScalingForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Metric $Metric
 * @property string $Stat
 * @property string $Unit
 */
class MetricStat extends Shape
{
    /**
     * @param array{
     *     Metric: Metric,
     *     Stat: string,
     *     Unit?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
