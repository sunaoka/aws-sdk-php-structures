<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string $logGroupIdentifier
 * @property string $logStreamName
 * @property int $startTime
 * @property int $endTime
 * @property string $nextToken
 * @property int $limit
 * @property bool $startFromHead
 * @property bool $unmask
 */
class GetLogEventsRequest extends Request
{
    /**
     * @param array{
     *     logGroupName?: string,
     *     logGroupIdentifier?: string,
     *     logStreamName: string,
     *     startTime?: int,
     *     endTime?: int,
     *     nextToken?: string,
     *     limit?: int,
     *     startFromHead?: bool,
     *     unmask?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
