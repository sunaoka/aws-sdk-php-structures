<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PredictiveScalingMetricSpecification> $MetricSpecifications
 * @property 'ForecastOnly'|'ForecastAndScale' $Mode
 * @property int<0, 3600> $SchedulingBufferTime
 * @property 'HonorMaxCapacity'|'IncreaseMaxCapacity' $MaxCapacityBreachBehavior
 * @property int<0, 100> $MaxCapacityBuffer
 */
class PredictiveScalingPolicyConfiguration extends Shape
{
    /**
     * @param array{
     *     MetricSpecifications: list<PredictiveScalingMetricSpecification>,
     *     Mode?: 'ForecastOnly'|'ForecastAndScale',
     *     SchedulingBufferTime?: int<0, 3600>,
     *     MaxCapacityBreachBehavior?: 'HonorMaxCapacity'|'IncreaseMaxCapacity',
     *     MaxCapacityBuffer?: int<0, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
