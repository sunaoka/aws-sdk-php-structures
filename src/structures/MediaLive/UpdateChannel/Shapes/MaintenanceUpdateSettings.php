<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY' $MaintenanceDay
 * @property string $MaintenanceScheduledDate
 * @property string $MaintenanceStartTime
 */
class MaintenanceUpdateSettings extends Shape
{
    /**
     * @param array{
     *     MaintenanceDay?: 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY',
     *     MaintenanceScheduledDate?: string,
     *     MaintenanceStartTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
