<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutLogEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $tooNewLogEventStartIndex
 * @property int|null $tooOldLogEventEndIndex
 * @property int|null $expiredLogEventEndIndex
 */
class RejectedLogEventsInfo extends Shape
{
    /**
     * @param array{
     *     tooNewLogEventStartIndex?: int|null,
     *     tooOldLogEventEndIndex?: int|null,
     *     expiredLogEventEndIndex?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
