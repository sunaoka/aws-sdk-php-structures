<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 */
class GetMonitorRequest extends Request
{
    /**
     * @param array{monitorName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
