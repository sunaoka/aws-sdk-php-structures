<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string $logGroupIdentifier
 * @property string $logStreamName
 * @property int<0, max> $startTime
 * @property int<0, max> $endTime
 * @property string $nextToken
 * @property int<1, 10000> $limit
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
     *     startTime?: int<0, max>,
     *     endTime?: int<0, max>,
     *     nextToken?: string,
     *     limit?: int<1, 10000>,
     *     startFromHead?: bool,
     *     unmask?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
