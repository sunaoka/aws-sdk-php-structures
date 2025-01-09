<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\ListMonitors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING' $monitorStatus
 */
class ListMonitorsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     monitorStatus?: 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
