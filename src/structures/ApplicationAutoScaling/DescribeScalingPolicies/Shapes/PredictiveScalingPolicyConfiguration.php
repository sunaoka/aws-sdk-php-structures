<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PredictiveScalingMetricSpecification> $MetricSpecifications
 * @property 'ForecastOnly'|'ForecastAndScale' $Mode
 * @property int $SchedulingBufferTime
 * @property 'HonorMaxCapacity'|'IncreaseMaxCapacity' $MaxCapacityBreachBehavior
 * @property int $MaxCapacityBuffer
 */
class PredictiveScalingPolicyConfiguration extends Shape
{
    /**
     * @param array{
     *     MetricSpecifications: list<PredictiveScalingMetricSpecification>,
     *     Mode?: 'ForecastOnly'|'ForecastAndScale',
     *     SchedulingBufferTime?: int,
     *     MaxCapacityBreachBehavior?: 'HonorMaxCapacity'|'IncreaseMaxCapacity',
     *     MaxCapacityBuffer?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
