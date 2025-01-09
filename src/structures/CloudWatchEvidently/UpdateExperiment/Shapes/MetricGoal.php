<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCREASE'|'DECREASE' $desiredChange
 * @property MetricDefinition $metricDefinition
 */
class MetricGoal extends Shape
{
    /**
     * @param array{
     *     desiredChange?: 'INCREASE'|'DECREASE',
     *     metricDefinition: MetricDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
