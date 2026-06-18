<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MetricConfiguration>|null $metricConfigurations
 */
class MonitoringConfiguration extends Shape
{
    /**
     * @param array{metricConfigurations?: list<MetricConfiguration>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
