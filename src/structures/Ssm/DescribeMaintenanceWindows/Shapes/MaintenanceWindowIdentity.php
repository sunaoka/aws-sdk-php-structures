<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WindowId
 * @property string $Name
 * @property string $Description
 * @property bool $Enabled
 * @property int<1, 24> $Duration
 * @property int<0, 23> $Cutoff
 * @property string $Schedule
 * @property string $ScheduleTimezone
 * @property int<1, 6> $ScheduleOffset
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
     *     Duration?: int<1, 24>,
     *     Cutoff?: int<0, 23>,
     *     Schedule?: string,
     *     ScheduleTimezone?: string,
     *     ScheduleOffset?: int<1, 6>,
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
