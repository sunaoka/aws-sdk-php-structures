<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestMetricFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $eventNumber
 * @property string $eventMessage
 * @property array<string, string> $extractedValues
 */
class MetricFilterMatchRecord extends Shape
{
    /**
     * @param array{
     *     eventNumber?: int,
     *     eventMessage?: string,
     *     extractedValues?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
