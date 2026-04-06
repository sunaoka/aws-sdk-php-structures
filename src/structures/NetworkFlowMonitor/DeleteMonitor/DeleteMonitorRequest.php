<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\DeleteMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 */
class DeleteMonitorRequest extends Request
{
    /**
     * @param array{monitorName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
