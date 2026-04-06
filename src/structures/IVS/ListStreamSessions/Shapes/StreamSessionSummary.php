<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreamSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $streamId
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property bool|null $hasErrorEvent
 */
class StreamSessionSummary extends Shape
{
    /**
     * @param array{
     *     streamId?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     hasErrorEvent?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
