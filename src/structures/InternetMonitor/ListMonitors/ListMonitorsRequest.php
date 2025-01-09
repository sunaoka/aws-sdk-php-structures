<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\ListMonitors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $MonitorStatus
 * @property bool $IncludeLinkedAccounts
 */
class ListMonitorsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     MonitorStatus?: string,
     *     IncludeLinkedAccounts?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
