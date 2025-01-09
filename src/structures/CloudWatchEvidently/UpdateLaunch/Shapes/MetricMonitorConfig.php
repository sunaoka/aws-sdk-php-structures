<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetricDefinitionConfig $metricDefinition
 */
class MetricMonitorConfig extends Shape
{
    /**
     * @param array{metricDefinition: MetricDefinitionConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
