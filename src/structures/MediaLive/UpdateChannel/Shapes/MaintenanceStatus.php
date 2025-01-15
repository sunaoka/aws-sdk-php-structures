<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY'|null $MaintenanceDay
 * @property string|null $MaintenanceDeadline
 * @property string|null $MaintenanceScheduledDate
 * @property string|null $MaintenanceStartTime
 */
class MaintenanceStatus extends Shape
{
    /**
     * @param array{
     *     MaintenanceDay?: 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY'|null,
     *     MaintenanceDeadline?: string|null,
     *     MaintenanceScheduledDate?: string|null,
     *     MaintenanceStartTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
