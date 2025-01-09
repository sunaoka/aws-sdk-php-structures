<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeLogStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logStreamName
 * @property int<0, max> $creationTime
 * @property int<0, max> $firstEventTimestamp
 * @property int<0, max> $lastEventTimestamp
 * @property int<0, max> $lastIngestionTime
 * @property string $uploadSequenceToken
 * @property string $arn
 * @property int<0, max> $storedBytes
 */
class LogStream extends Shape
{
    /**
     * @param array{
     *     logStreamName?: string,
     *     creationTime?: int<0, max>,
     *     firstEventTimestamp?: int<0, max>,
     *     lastEventTimestamp?: int<0, max>,
     *     lastIngestionTime?: int<0, max>,
     *     uploadSequenceToken?: string,
     *     arn?: string,
     *     storedBytes?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
