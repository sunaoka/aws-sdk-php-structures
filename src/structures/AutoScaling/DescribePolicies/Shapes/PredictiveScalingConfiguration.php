<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PredictiveScalingMetricSpecification> $MetricSpecifications
 * @property 'ForecastAndScale'|'ForecastOnly'|null $Mode
 * @property int<0, max>|null $SchedulingBufferTime
 * @property 'HonorMaxCapacity'|'IncreaseMaxCapacity'|null $MaxCapacityBreachBehavior
 * @property int<0, 100>|null $MaxCapacityBuffer
 */
class PredictiveScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     MetricSpecifications: list<PredictiveScalingMetricSpecification>,
     *     Mode?: 'ForecastAndScale'|'ForecastOnly'|null,
     *     SchedulingBufferTime?: int<0, max>|null,
     *     MaxCapacityBreachBehavior?: 'HonorMaxCapacity'|'IncreaseMaxCapacity'|null,
     *     MaxCapacityBuffer?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
