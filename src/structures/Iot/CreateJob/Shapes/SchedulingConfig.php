<?php

namespace Sunaoka\Aws\Structures\Iot\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $startTime
 * @property string $endTime
 * @property 'STOP_ROLLOUT'|'CANCEL'|'FORCE_CANCEL' $endBehavior
 * @property list<MaintenanceWindow> $maintenanceWindows
 */
class SchedulingConfig extends Shape
{
    /**
     * @param array{
     *     startTime?: string,
     *     endTime?: string,
     *     endBehavior?: 'STOP_ROLLOUT'|'CANCEL'|'FORCE_CANCEL',
     *     maintenanceWindows?: list<MaintenanceWindow>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
