<?php

namespace Sunaoka\Aws\Structures\CostExplorer\UpdateAnomalyMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorArn
 * @property string|null $MonitorName
 */
class UpdateAnomalyMonitorRequest extends Request
{
    /**
     * @param array{
     *     MonitorArn: string,
     *     MonitorName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
