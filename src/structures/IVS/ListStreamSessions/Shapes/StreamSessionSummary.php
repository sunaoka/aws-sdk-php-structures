<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreamSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property bool $hasErrorEvent
 * @property \Aws\Api\DateTimeResult $startTime
 * @property string $streamId
 */
class StreamSessionSummary extends Shape
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult,
     *     hasErrorEvent?: bool,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     streamId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
