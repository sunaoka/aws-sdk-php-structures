<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetContextGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MetricMetadata>|null $metrics
 * @property NodeSemantics|null $semantics
 * @property list<LogMetadata>|null $logs
 * @property list<TraceMetadata>|null $traces
 */
class Metadata extends Shape
{
    /**
     * @param array{
     *     metrics?: list<MetricMetadata>|null,
     *     semantics?: NodeSemantics|null,
     *     logs?: list<LogMetadata>|null,
     *     traces?: list<TraceMetadata>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
