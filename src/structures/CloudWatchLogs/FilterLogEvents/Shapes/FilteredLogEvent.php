<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\FilterLogEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logStreamName
 * @property int<0, max>|null $timestamp
 * @property string|null $message
 * @property int<0, max>|null $ingestionTime
 * @property string|null $eventId
 */
class FilteredLogEvent extends Shape
{
    /**
     * @param array{
     *     logStreamName?: string|null,
     *     timestamp?: int<0, max>|null,
     *     message?: string|null,
     *     ingestionTime?: int<0, max>|null,
     *     eventId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
