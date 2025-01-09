<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\UpdateScalingPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property string $Namespace
 * @property list<MetricDimension> $Dimensions
 * @property 'Average'|'Minimum'|'Maximum'|'SampleCount'|'Sum' $Statistic
 * @property string $Unit
 */
class CustomizedScalingMetricSpecification extends Shape
{
    /**
     * @param array{
     *     MetricName: string,
     *     Namespace: string,
     *     Dimensions?: list<MetricDimension>,
     *     Statistic: 'Average'|'Minimum'|'Maximum'|'SampleCount'|'Sum',
     *     Unit?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
