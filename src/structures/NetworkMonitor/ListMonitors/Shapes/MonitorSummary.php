<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\ListMonitors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $monitorArn
 * @property string $monitorName
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING' $state
 * @property int<30, max>|null $aggregationPeriod
 * @property array<string, string>|null $tags
 */
class MonitorSummary extends Shape
{
    /**
     * @param array{
     *     monitorArn: string,
     *     monitorName: string,
     *     state: 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING',
     *     aggregationPeriod?: int<30, max>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
