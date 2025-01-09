<?php

namespace Sunaoka\Aws\Structures\Lambda\ListEventSourceMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'EventCount'> $Metrics
 */
class EventSourceMappingMetricsConfig extends Shape
{
    /**
     * @param array{Metrics?: list<'EventCount'>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
