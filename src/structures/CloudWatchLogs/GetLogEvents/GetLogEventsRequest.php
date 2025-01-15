<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $logGroupName
 * @property string|null $logGroupIdentifier
 * @property string $logStreamName
 * @property int<0, max>|null $startTime
 * @property int<0, max>|null $endTime
 * @property string|null $nextToken
 * @property int<1, 10000>|null $limit
 * @property bool|null $startFromHead
 * @property bool|null $unmask
 */
class GetLogEventsRequest extends Request
{
    /**
     * @param array{
     *     logGroupName?: string|null,
     *     logGroupIdentifier?: string|null,
     *     logStreamName: string,
     *     startTime?: int<0, max>|null,
     *     endTime?: int<0, max>|null,
     *     nextToken?: string|null,
     *     limit?: int<1, 10000>|null,
     *     startFromHead?: bool|null,
     *     unmask?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
