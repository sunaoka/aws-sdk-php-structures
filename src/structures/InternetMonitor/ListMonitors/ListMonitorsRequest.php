<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\ListMonitors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 25>|null $MaxResults
 * @property string|null $MonitorStatus
 * @property bool|null $IncludeLinkedAccounts
 */
class ListMonitorsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 25>|null,
     *     MonitorStatus?: string|null,
     *     IncludeLinkedAccounts?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
