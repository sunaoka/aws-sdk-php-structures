<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\ListMonitors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 25> $maxResults
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING' $monitorStatus
 */
class ListMonitorsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 25>,
     *     monitorStatus?: 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
