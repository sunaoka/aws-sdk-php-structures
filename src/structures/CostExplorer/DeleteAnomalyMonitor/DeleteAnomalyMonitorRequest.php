<?php

namespace Sunaoka\Aws\Structures\CostExplorer\DeleteAnomalyMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorArn
 */
class DeleteAnomalyMonitorRequest extends Request
{
    /**
     * @param array{MonitorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
