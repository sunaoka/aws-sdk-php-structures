<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Monday'|'Tuesday'|'Wednesday'|'Thursday'|'Friday'|'Saturday'|'Sunday' $MaintenanceDay
 * @property string $MaintenanceDeadline
 * @property string $MaintenanceScheduledDate
 * @property string $MaintenanceStartHour
 */
class Maintenance extends Shape
{
    /**
     * @param array{
     *     MaintenanceDay?: 'Monday'|'Tuesday'|'Wednesday'|'Thursday'|'Friday'|'Saturday'|'Sunday',
     *     MaintenanceDeadline?: string,
     *     MaintenanceScheduledDate?: string,
     *     MaintenanceStartHour?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
