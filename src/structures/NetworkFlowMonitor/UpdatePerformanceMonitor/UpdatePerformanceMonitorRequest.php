<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\UpdatePerformanceMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property list<Shapes\PerformanceMonitorTarget>|null $targetsToAdd
 * @property list<Shapes\PerformanceMonitorTarget>|null $targetsToRemove
 * @property string|null $clientToken
 */
class UpdatePerformanceMonitorRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     targetsToAdd?: list<Shapes\PerformanceMonitorTarget>|null,
     *     targetsToRemove?: list<Shapes\PerformanceMonitorTarget>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
