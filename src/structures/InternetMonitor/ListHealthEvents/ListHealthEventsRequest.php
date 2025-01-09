<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\ListHealthEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorName
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $NextToken
 * @property int<1, 25> $MaxResults
 * @property 'ACTIVE'|'RESOLVED' $EventStatus
 * @property string $LinkedAccountId
 */
class ListHealthEventsRequest extends Request
{
    /**
     * @param array{
     *     MonitorName: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     NextToken?: string,
     *     MaxResults?: int<1, 25>,
     *     EventStatus?: 'ACTIVE'|'RESOLVED',
     *     LinkedAccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
