<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutLogEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $tooNewLogEventStartIndex
 * @property int $tooOldLogEventEndIndex
 * @property int $expiredLogEventEndIndex
 */
class RejectedLogEventsInfo extends Shape
{
    /**
     * @param array{
     *     tooNewLogEventStartIndex?: int,
     *     tooOldLogEventEndIndex?: int,
     *     expiredLogEventEndIndex?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
