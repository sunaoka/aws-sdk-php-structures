<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\DescribeScalingPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property string $Namespace
 * @property list<MetricDimension>|null $Dimensions
 * @property 'Average'|'Minimum'|'Maximum'|'SampleCount'|'Sum' $Statistic
 * @property string|null $Unit
 */
class CustomizedScalingMetricSpecification extends Shape
{
    /**
     * @param array{
     *     MetricName: string,
     *     Namespace: string,
     *     Dimensions?: list<MetricDimension>|null,
     *     Statistic: 'Average'|'Minimum'|'Maximum'|'SampleCount'|'Sum',
     *     Unit?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
