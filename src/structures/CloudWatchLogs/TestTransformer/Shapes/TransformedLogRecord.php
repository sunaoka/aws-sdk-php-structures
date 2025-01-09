<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $eventNumber
 * @property string $eventMessage
 * @property string $transformedEventMessage
 */
class TransformedLogRecord extends Shape
{
    /**
     * @param array{
     *     eventNumber?: int,
     *     eventMessage?: string,
     *     transformedEventMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
