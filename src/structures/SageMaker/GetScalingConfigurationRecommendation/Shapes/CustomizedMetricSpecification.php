<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property string $Namespace
 * @property 'Average'|'Minimum'|'Maximum'|'SampleCount'|'Sum' $Statistic
 */
class CustomizedMetricSpecification extends Shape
{
    /**
     * @param array{
     *     MetricName?: string,
     *     Namespace?: string,
     *     Statistic?: 'Average'|'Minimum'|'Maximum'|'SampleCount'|'Sum'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
