<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\FilterLogEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $logGroupName
 * @property string|null $logGroupIdentifier
 * @property list<string>|null $logStreamNames
 * @property string|null $logStreamNamePrefix
 * @property int<0, max>|null $startTime
 * @property int<0, max>|null $endTime
 * @property string|null $filterPattern
 * @property string|null $nextToken
 * @property int<1, 10000>|null $limit
 * @property bool|null $interleaved
 * @property bool|null $unmask
 */
class FilterLogEventsRequest extends Request
{
    /**
     * @param array{
     *     logGroupName?: string|null,
     *     logGroupIdentifier?: string|null,
     *     logStreamNames?: list<string>|null,
     *     logStreamNamePrefix?: string|null,
     *     startTime?: int<0, max>|null,
     *     endTime?: int<0, max>|null,
     *     filterPattern?: string|null,
     *     nextToken?: string|null,
     *     limit?: int<1, 10000>|null,
     *     interleaved?: bool|null,
     *     unmask?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
