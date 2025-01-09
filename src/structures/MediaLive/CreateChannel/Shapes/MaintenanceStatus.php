<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY' $MaintenanceDay
 * @property string $MaintenanceDeadline
 * @property string $MaintenanceScheduledDate
 * @property string $MaintenanceStartTime
 */
class MaintenanceStatus extends Shape
{
    /**
     * @param array{
     *     MaintenanceDay?: 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY',
     *     MaintenanceDeadline?: string,
     *     MaintenanceScheduledDate?: string,
     *     MaintenanceStartTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
