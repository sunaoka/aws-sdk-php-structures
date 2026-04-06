<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\ListMonitors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 25>|null $maxResults
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING'|null $monitorStatus
 */
class ListMonitorsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 25>|null,
     *     monitorStatus?: 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
