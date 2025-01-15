<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeLogStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logStreamName
 * @property int<0, max>|null $creationTime
 * @property int<0, max>|null $firstEventTimestamp
 * @property int<0, max>|null $lastEventTimestamp
 * @property int<0, max>|null $lastIngestionTime
 * @property string|null $uploadSequenceToken
 * @property string|null $arn
 * @property int<0, max>|null $storedBytes
 */
class LogStream extends Shape
{
    /**
     * @param array{
     *     logStreamName?: string|null,
     *     creationTime?: int<0, max>|null,
     *     firstEventTimestamp?: int<0, max>|null,
     *     lastEventTimestamp?: int<0, max>|null,
     *     lastIngestionTime?: int<0, max>|null,
     *     uploadSequenceToken?: string|null,
     *     arn?: string|null,
     *     storedBytes?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
