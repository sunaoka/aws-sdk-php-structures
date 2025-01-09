<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WindowId
 * @property string $Name
 * @property string $Description
 * @property bool $Enabled
 * @property int $Duration
 * @property int $Cutoff
 * @property string $Schedule
 * @property string $ScheduleTimezone
 * @property int $ScheduleOffset
 * @property string $EndDate
 * @property string $StartDate
 * @property string $NextExecutionTime
 */
class MaintenanceWindowIdentity extends Shape
{
    /**
     * @param array{
     *     WindowId?: string,
     *     Name?: string,
     *     Description?: string,
     *     Enabled?: bool,
     *     Duration?: int,
     *     Cutoff?: int,
     *     Schedule?: string,
     *     ScheduleTimezone?: string,
     *     ScheduleOffset?: int,
     *     EndDate?: string,
     *     StartDate?: string,
     *     NextExecutionTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
