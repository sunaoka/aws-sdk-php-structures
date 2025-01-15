<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PredictiveScalingMetricSpecification> $MetricSpecifications
 * @property 'ForecastOnly'|'ForecastAndScale'|null $Mode
 * @property int<0, 3600>|null $SchedulingBufferTime
 * @property 'HonorMaxCapacity'|'IncreaseMaxCapacity'|null $MaxCapacityBreachBehavior
 * @property int<0, 100>|null $MaxCapacityBuffer
 */
class PredictiveScalingPolicyConfiguration extends Shape
{
    /**
     * @param array{
     *     MetricSpecifications: list<PredictiveScalingMetricSpecification>,
     *     Mode?: 'ForecastOnly'|'ForecastAndScale'|null,
     *     SchedulingBufferTime?: int<0, 3600>|null,
     *     MaxCapacityBreachBehavior?: 'HonorMaxCapacity'|'IncreaseMaxCapacity'|null,
     *     MaxCapacityBuffer?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
