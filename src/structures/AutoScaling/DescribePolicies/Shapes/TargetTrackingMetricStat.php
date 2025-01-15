<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Metric $Metric
 * @property string $Stat
 * @property string|null $Unit
 * @property int<1, max>|null $Period
 */
class TargetTrackingMetricStat extends Shape
{
    /**
     * @param array{
     *     Metric: Metric,
     *     Stat: string,
     *     Unit?: string|null,
     *     Period?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
