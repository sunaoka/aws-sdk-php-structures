<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\StartLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetricDefinition $metricDefinition
 */
class MetricMonitor extends Shape
{
    /**
     * @param array{metricDefinition: MetricDefinition} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
