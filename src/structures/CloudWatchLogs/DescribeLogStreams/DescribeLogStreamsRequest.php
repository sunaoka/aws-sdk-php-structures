<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeLogStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $logGroupName
 * @property string|null $logGroupIdentifier
 * @property string|null $logStreamNamePrefix
 * @property 'LogStreamName'|'LastEventTime'|null $orderBy
 * @property bool|null $descending
 * @property string|null $nextToken
 * @property int<1, 50>|null $limit
 */
class DescribeLogStreamsRequest extends Request
{
    /**
     * @param array{
     *     logGroupName?: string|null,
     *     logGroupIdentifier?: string|null,
     *     logStreamNamePrefix?: string|null,
     *     orderBy?: 'LogStreamName'|'LastEventTime'|null,
     *     descending?: bool|null,
     *     nextToken?: string|null,
     *     limit?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
