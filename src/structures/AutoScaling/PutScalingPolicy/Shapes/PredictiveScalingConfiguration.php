<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PredictiveScalingMetricSpecification> $MetricSpecifications
 * @property 'ForecastAndScale'|'ForecastOnly' $Mode
 * @property int $SchedulingBufferTime
 * @property 'HonorMaxCapacity'|'IncreaseMaxCapacity' $MaxCapacityBreachBehavior
 * @property int $MaxCapacityBuffer
 */
class PredictiveScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     MetricSpecifications: list<PredictiveScalingMetricSpecification>,
     *     Mode?: 'ForecastAndScale'|'ForecastOnly',
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
