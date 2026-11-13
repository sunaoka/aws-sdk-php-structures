<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASGAverageCPUUtilization'|'ASGAverageCPUUtilizationHighResolution'|'ASGAverageNetworkIn'|'ASGAverageNetworkOut'|'ALBRequestCountPerTarget' $PredefinedMetricType
 * @property string|null $ResourceLabel
 */
class PredefinedMetricSpecification extends Shape
{
    /**
     * @param array{
     *     PredefinedMetricType: 'ASGAverageCPUUtilization'|'ASGAverageCPUUtilizationHighResolution'|'ASGAverageNetworkIn'|'ASGAverageNetworkOut'|'ALBRequestCountPerTarget',
     *     ResourceLabel?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
