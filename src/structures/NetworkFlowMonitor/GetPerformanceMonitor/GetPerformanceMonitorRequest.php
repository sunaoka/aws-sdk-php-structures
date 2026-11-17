<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetPerformanceMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 */
class GetPerformanceMonitorRequest extends Request
{
    /**
     * @param array{monitorName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
