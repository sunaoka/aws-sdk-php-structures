<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListExperiments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCREASE'|'DECREASE'|null $desiredChange
 * @property MetricDefinition $metricDefinition
 */
class MetricGoal extends Shape
{
    /**
     * @param array{
     *     desiredChange?: 'INCREASE'|'DECREASE'|null,
     *     metricDefinition: MetricDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
