<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Monday'|'Tuesday'|'Wednesday'|'Thursday'|'Friday'|'Saturday'|'Sunday' $MaintenanceDay
 * @property string $MaintenanceScheduledDate
 * @property string $MaintenanceStartHour
 */
class UpdateMaintenance extends Shape
{
    /**
     * @param array{
     *     MaintenanceDay?: 'Monday'|'Tuesday'|'Wednesday'|'Thursday'|'Friday'|'Saturday'|'Sunday',
     *     MaintenanceScheduledDate?: string,
     *     MaintenanceStartHour?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
