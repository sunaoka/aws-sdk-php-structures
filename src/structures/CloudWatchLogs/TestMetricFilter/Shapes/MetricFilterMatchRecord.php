<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestMetricFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $eventNumber
 * @property string|null $eventMessage
 * @property array<string, string>|null $extractedValues
 */
class MetricFilterMatchRecord extends Shape
{
    /**
     * @param array{
     *     eventNumber?: int|null,
     *     eventMessage?: string|null,
     *     extractedValues?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
