<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\FilterLogEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logStreamName
 * @property int<0, max> $timestamp
 * @property string $message
 * @property int<0, max> $ingestionTime
 * @property string $eventId
 */
class FilteredLogEvent extends Shape
{
    /**
     * @param array{
     *     logStreamName?: string,
     *     timestamp?: int<0, max>,
     *     message?: string,
     *     ingestionTime?: int<0, max>,
     *     eventId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
