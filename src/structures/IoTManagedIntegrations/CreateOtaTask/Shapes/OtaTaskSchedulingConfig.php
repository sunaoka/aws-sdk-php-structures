<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateOtaTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STOP_ROLLOUT'|'CANCEL'|'FORCE_CANCEL'|null $EndBehavior
 * @property string|null $EndTime
 * @property list<ScheduleMaintenanceWindow>|null $MaintenanceWindows
 * @property string|null $StartTime
 */
class OtaTaskSchedulingConfig extends Shape
{
    /**
     * @param array{
     *     EndBehavior?: 'STOP_ROLLOUT'|'CANCEL'|'FORCE_CANCEL'|null,
     *     EndTime?: string|null,
     *     MaintenanceWindows?: list<ScheduleMaintenanceWindow>|null,
     *     StartTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
