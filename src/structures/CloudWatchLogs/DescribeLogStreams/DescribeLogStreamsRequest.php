<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeLogStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string $logGroupIdentifier
 * @property string $logStreamNamePrefix
 * @property 'LogStreamName'|'LastEventTime' $orderBy
 * @property bool $descending
 * @property string $nextToken
 * @property int<1, 50> $limit
 */
class DescribeLogStreamsRequest extends Request
{
    /**
     * @param array{
     *     logGroupName?: string,
     *     logGroupIdentifier?: string,
     *     logStreamNamePrefix?: string,
     *     orderBy?: 'LogStreamName'|'LastEventTime',
     *     descending?: bool,
     *     nextToken?: string,
     *     limit?: int<1, 50>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
