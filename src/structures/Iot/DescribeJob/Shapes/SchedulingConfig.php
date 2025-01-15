<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $startTime
 * @property string|null $endTime
 * @property 'STOP_ROLLOUT'|'CANCEL'|'FORCE_CANCEL'|null $endBehavior
 * @property list<MaintenanceWindow>|null $maintenanceWindows
 */
class SchedulingConfig extends Shape
{
    /**
     * @param array{
     *     startTime?: string|null,
     *     endTime?: string|null,
     *     endBehavior?: 'STOP_ROLLOUT'|'CANCEL'|'FORCE_CANCEL'|null,
     *     maintenanceWindows?: list<MaintenanceWindow>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
