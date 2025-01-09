<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\ListMonitors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $monitorArn
 * @property string $monitorName
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING' $state
 * @property int $aggregationPeriod
 * @property array<string, string> $tags
 */
class MonitorSummary extends Shape
{
    /**
     * @param array{
     *     monitorArn: string,
     *     monitorName: string,
     *     state: 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING',
     *     aggregationPeriod?: int,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
