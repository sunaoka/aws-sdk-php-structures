<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\ListInternetEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $EventStatus
 * @property string $EventType
 */
class ListInternetEventsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     EventStatus?: string,
     *     EventType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
