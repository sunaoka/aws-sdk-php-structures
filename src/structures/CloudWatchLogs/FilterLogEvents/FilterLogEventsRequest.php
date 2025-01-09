<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\FilterLogEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string $logGroupIdentifier
 * @property list<string> $logStreamNames
 * @property string $logStreamNamePrefix
 * @property int $startTime
 * @property int $endTime
 * @property string $filterPattern
 * @property string $nextToken
 * @property int $limit
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
     *     startTime?: int,
     *     endTime?: int,
     *     filterPattern?: string,
     *     nextToken?: string,
     *     limit?: int,
     *     interleaved?: bool,
     *     unmask?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
