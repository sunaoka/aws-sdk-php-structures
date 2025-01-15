<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricName
 * @property string|null $Namespace
 * @property 'Average'|'Minimum'|'Maximum'|'SampleCount'|'Sum'|null $Statistic
 */
class CustomizedMetricSpecification extends Shape
{
    /**
     * @param array{
     *     MetricName?: string|null,
     *     Namespace?: string|null,
     *     Statistic?: 'Average'|'Minimum'|'Maximum'|'SampleCount'|'Sum'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
