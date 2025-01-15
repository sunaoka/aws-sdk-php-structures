<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Monday'|'Tuesday'|'Wednesday'|'Thursday'|'Friday'|'Saturday'|'Sunday'|null $MaintenanceDay
 * @property string|null $MaintenanceScheduledDate
 * @property string|null $MaintenanceStartHour
 */
class UpdateMaintenance extends Shape
{
    /**
     * @param array{
     *     MaintenanceDay?: 'Monday'|'Tuesday'|'Wednesday'|'Thursday'|'Friday'|'Saturday'|'Sunday'|null,
     *     MaintenanceScheduledDate?: string|null,
     *     MaintenanceStartHour?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
