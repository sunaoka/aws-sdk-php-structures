<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WindowId
 * @property string|null $Name
 * @property string|null $Description
 * @property bool|null $Enabled
 * @property int<1, 24>|null $Duration
 * @property int<0, 23>|null $Cutoff
 * @property string|null $Schedule
 * @property string|null $ScheduleTimezone
 * @property int<1, 6>|null $ScheduleOffset
 * @property string|null $EndDate
 * @property string|null $StartDate
 * @property string|null $NextExecutionTime
 */
class MaintenanceWindowIdentity extends Shape
{
    /**
     * @param array{
     *     WindowId?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Enabled?: bool|null,
     *     Duration?: int<1, 24>|null,
     *     Cutoff?: int<0, 23>|null,
     *     Schedule?: string|null,
     *     ScheduleTimezone?: string|null,
     *     ScheduleOffset?: int<1, 6>|null,
     *     EndDate?: string|null,
     *     StartDate?: string|null,
     *     NextExecutionTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
