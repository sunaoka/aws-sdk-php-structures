<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryStatusMonitorTopContributors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property string $queryId
 */
class GetQueryStatusMonitorTopContributorsRequest extends Request
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
