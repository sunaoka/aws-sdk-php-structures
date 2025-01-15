<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY'|null $MaintenanceDay
 * @property string|null $MaintenanceStartTime
 */
class MaintenanceCreateSettings extends Shape
{
    /**
     * @param array{
     *     MaintenanceDay?: 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY'|null,
     *     MaintenanceStartTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
