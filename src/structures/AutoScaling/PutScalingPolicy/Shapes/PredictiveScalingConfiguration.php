<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PredictiveScalingMetricSpecification> $MetricSpecifications
 * @property 'ForecastAndScale'|'ForecastOnly' $Mode
 * @property int<0, max> $SchedulingBufferTime
 * @property 'HonorMaxCapacity'|'IncreaseMaxCapacity' $MaxCapacityBreachBehavior
 * @property int<0, 100> $MaxCapacityBuffer
 */
class PredictiveScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     MetricSpecifications: list<PredictiveScalingMetricSpecification>,
     *     Mode?: 'ForecastAndScale'|'ForecastOnly',
     *     SchedulingBufferTime?: int<0, max>,
     *     MaxCapacityBreachBehavior?: 'HonorMaxCapacity'|'IncreaseMaxCapacity',
     *     MaxCapacityBuffer?: int<0, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
