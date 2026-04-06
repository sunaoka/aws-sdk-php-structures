<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StartLiveTail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logStreamName
 * @property string|null $logGroupIdentifier
 * @property string|null $message
 * @property int<0, max>|null $timestamp
 * @property int<0, max>|null $ingestionTime
 */
class LiveTailSessionLogEvent extends Shape
{
    /**
     * @param array{
     *     logStreamName?: string|null,
     *     logGroupIdentifier?: string|null,
     *     message?: string|null,
     *     timestamp?: int<0, max>|null,
     *     ingestionTime?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
