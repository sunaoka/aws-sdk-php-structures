<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'EventCount'|'ErrorCount'|'KafkaMetrics'>|null $Metrics
 */
class EventSourceMappingMetricsConfig extends Shape
{
    /**
     * @param array{Metrics?: list<'EventCount'|'ErrorCount'|'KafkaMetrics'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
