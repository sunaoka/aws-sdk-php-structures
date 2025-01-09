<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StartLiveTail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logStreamName
 * @property string $logGroupIdentifier
 * @property string $message
 * @property int $timestamp
 * @property int $ingestionTime
 */
class LiveTailSessionLogEvent extends Shape
{
    /**
     * @param array{
     *     logStreamName?: string,
     *     logGroupIdentifier?: string,
     *     message?: string,
     *     timestamp?: int,
     *     ingestionTime?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
