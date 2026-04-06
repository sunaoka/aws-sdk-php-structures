<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $eventNumber
 * @property string|null $eventMessage
 * @property string|null $transformedEventMessage
 */
class TransformedLogRecord extends Shape
{
    /**
     * @param array{
     *     eventNumber?: int|null,
     *     eventMessage?: string|null,
     *     transformedEventMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
