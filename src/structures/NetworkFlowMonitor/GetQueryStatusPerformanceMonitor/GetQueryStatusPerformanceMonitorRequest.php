<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryStatusPerformanceMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property string $queryId
 */
class GetQueryStatusPerformanceMonitorRequest extends Request
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
