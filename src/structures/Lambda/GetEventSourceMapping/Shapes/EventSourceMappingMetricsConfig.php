<?php

namespace Sunaoka\Aws\Structures\Lambda\GetEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'EventCount'>|null $Metrics
 */
class EventSourceMappingMetricsConfig extends Shape
{
    /**
     * @param array{Metrics?: list<'EventCount'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
