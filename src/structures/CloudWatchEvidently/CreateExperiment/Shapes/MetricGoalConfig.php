<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCREASE'|'DECREASE'|null $desiredChange
 * @property MetricDefinitionConfig $metricDefinition
 */
class MetricGoalConfig extends Shape
{
    /**
     * @param array{
     *     desiredChange?: 'INCREASE'|'DECREASE'|null,
     *     metricDefinition: MetricDefinitionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
