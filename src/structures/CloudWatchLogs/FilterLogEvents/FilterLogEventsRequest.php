<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\FilterLogEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string $logGroupIdentifier
 * @property list<string> $logStreamNames
 * @property string $logStreamNamePrefix
 * @property int<0, max> $startTime
 * @property int<0, max> $endTime
 * @property string $filterPattern
 * @property string $nextToken
 * @property int<1, 10000> $limit
 * @property bool $interleaved
 * @property bool $unmask
 */
class FilterLogEventsRequest extends Request
{
    /**
     * @param array{
     *     logGroupName?: string,
     *     logGroupIdentifier?: string,
     *     logStreamNames?: list<string>,
     *     logStreamNamePrefix?: string,
     *     startTime?: int<0, max>,
     *     endTime?: int<0, max>,
     *     filterPattern?: string,
     *     nextToken?: string,
     *     limit?: int<1, 10000>,
     *     interleaved?: bool,
     *     unmask?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
