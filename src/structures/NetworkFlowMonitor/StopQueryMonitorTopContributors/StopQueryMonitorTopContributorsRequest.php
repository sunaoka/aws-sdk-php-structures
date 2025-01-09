<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\StopQueryMonitorTopContributors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property string $queryId
 */
class StopQueryMonitorTopContributorsRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     queryId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
