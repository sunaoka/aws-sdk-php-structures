<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Monday'|'Tuesday'|'Wednesday'|'Thursday'|'Friday'|'Saturday'|'Sunday' $MaintenanceDay
 * @property string $MaintenanceStartHour
 */
class AddMaintenance extends Shape
{
    /**
     * @param array{
     *     MaintenanceDay: 'Monday'|'Tuesday'|'Wednesday'|'Thursday'|'Friday'|'Saturday'|'Sunday',
     *     MaintenanceStartHour: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
