<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCREASE'|'DECREASE' $desiredChange
 * @property MetricDefinitionConfig $metricDefinition
 */
class MetricGoalConfig extends Shape
{
    /**
     * @param array{
     *     desiredChange?: 'INCREASE'|'DECREASE',
     *     metricDefinition: MetricDefinitionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
