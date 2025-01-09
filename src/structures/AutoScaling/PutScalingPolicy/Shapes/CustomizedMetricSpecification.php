<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property string $Namespace
 * @property list<MetricDimension> $Dimensions
 * @property 'Average'|'Minimum'|'Maximum'|'SampleCount'|'Sum' $Statistic
 * @property string $Unit
 * @property int $Period
 * @property list<TargetTrackingMetricDataQuery> $Metrics
 */
class CustomizedMetricSpecification extends Shape
{
    /**
     * @param array{
     *     MetricName?: string,
     *     Namespace?: string,
     *     Dimensions?: list<MetricDimension>,
     *     Statistic?: 'Average'|'Minimum'|'Maximum'|'SampleCount'|'Sum',
     *     Unit?: string,
     *     Period?: int,
     *     Metrics?: list<TargetTrackingMetricDataQuery>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
