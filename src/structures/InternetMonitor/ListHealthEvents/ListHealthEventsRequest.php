<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\ListHealthEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorName
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $NextToken
 * @property int<1, 25>|null $MaxResults
 * @property 'ACTIVE'|'RESOLVED'|null $EventStatus
 * @property string|null $LinkedAccountId
 */
class ListHealthEventsRequest extends Request
{
    /**
     * @param array{
     *     MonitorName: string,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 25>|null,
     *     EventStatus?: 'ACTIVE'|'RESOLVED'|null,
     *     LinkedAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
