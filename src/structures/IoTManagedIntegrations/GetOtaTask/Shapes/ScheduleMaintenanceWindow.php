<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetOtaTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1430>|null $DurationInMinutes
 * @property string|null $StartTime
 */
class ScheduleMaintenanceWindow extends Shape
{
    /**
     * @param array{
     *     DurationInMinutes?: int<1, 1430>|null,
     *     StartTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
