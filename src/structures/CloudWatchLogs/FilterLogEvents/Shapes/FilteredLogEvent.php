<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\FilterLogEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logStreamName
 * @property int $timestamp
 * @property string $message
 * @property int $ingestionTime
 * @property string $eventId
 */
class FilteredLogEvent extends Shape
{
    /**
     * @param array{
     *     logStreamName?: string,
     *     timestamp?: int,
     *     message?: string,
     *     ingestionTime?: int,
     *     eventId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
