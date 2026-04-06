<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreamSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property bool|null $hasErrorEvent
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property string|null $streamId
 */
class StreamSessionSummary extends Shape
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     hasErrorEvent?: bool|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     streamId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
