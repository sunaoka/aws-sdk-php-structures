<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeLogStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logStreamName
 * @property int $creationTime
 * @property int $firstEventTimestamp
 * @property int $lastEventTimestamp
 * @property int $lastIngestionTime
 * @property string $uploadSequenceToken
 * @property string $arn
 * @property int $storedBytes
 */
class LogStream extends Shape
{
    /**
     * @param array{
     *     logStreamName?: string,
     *     creationTime?: int,
     *     firstEventTimestamp?: int,
     *     lastEventTimestamp?: int,
     *     lastIngestionTime?: int,
     *     uploadSequenceToken?: string,
     *     arn?: string,
     *     storedBytes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
