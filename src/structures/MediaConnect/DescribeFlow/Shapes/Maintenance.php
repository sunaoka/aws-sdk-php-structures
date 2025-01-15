<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Monday'|'Tuesday'|'Wednesday'|'Thursday'|'Friday'|'Saturday'|'Sunday'|null $MaintenanceDay
 * @property string|null $MaintenanceDeadline
 * @property string|null $MaintenanceScheduledDate
 * @property string|null $MaintenanceStartHour
 */
class Maintenance extends Shape
{
    /**
     * @param array{
     *     MaintenanceDay?: 'Monday'|'Tuesday'|'Wednesday'|'Thursday'|'Friday'|'Saturday'|'Sunday'|null,
     *     MaintenanceDeadline?: string|null,
     *     MaintenanceScheduledDate?: string|null,
     *     MaintenanceStartHour?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
