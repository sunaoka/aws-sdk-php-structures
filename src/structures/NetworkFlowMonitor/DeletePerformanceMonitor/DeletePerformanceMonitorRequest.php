<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\DeletePerformanceMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 */
class DeletePerformanceMonitorRequest extends Request
{
    /**
     * @param array{monitorName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
