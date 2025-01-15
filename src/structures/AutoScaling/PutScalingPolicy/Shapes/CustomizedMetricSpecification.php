<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricName
 * @property string|null $Namespace
 * @property list<MetricDimension>|null $Dimensions
 * @property 'Average'|'Minimum'|'Maximum'|'SampleCount'|'Sum'|null $Statistic
 * @property string|null $Unit
 * @property int<1, max>|null $Period
 * @property list<TargetTrackingMetricDataQuery>|null $Metrics
 */
class CustomizedMetricSpecification extends Shape
{
    /**
     * @param array{
     *     MetricName?: string|null,
     *     Namespace?: string|null,
     *     Dimensions?: list<MetricDimension>|null,
     *     Statistic?: 'Average'|'Minimum'|'Maximum'|'SampleCount'|'Sum'|null,
     *     Unit?: string|null,
     *     Period?: int<1, max>|null,
     *     Metrics?: list<TargetTrackingMetricDataQuery>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
