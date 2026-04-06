<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\ListMonitors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $monitorArn
 * @property string $monitorName
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING' $monitorStatus
 */
class MonitorSummary extends Shape
{
    /**
     * @param array{
     *     monitorArn: string,
     *     monitorName: string,
     *     monitorStatus: 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
