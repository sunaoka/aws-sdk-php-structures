<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\ListPerformanceMonitors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $monitorArn
 * @property string $monitorName
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING' $monitorStatus
 * @property 'VPC' $monitorType
 * @property list<PerformanceMonitorTarget>|null $targets
 */
class PerformanceMonitorSummary extends Shape
{
    /**
     * @param array{
     *     monitorArn: string,
     *     monitorName: string,
     *     monitorStatus: 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING',
     *     monitorType: 'VPC',
     *     targets?: list<PerformanceMonitorTarget>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
