<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 * @property string $Name
 * @property string $Description
 * @property string $StartDate
 * @property string $EndDate
 * @property string $Schedule
 * @property string $ScheduleTimezone
 * @property int<1, 6> $ScheduleOffset
 * @property int<1, 24> $Duration
 * @property int<0, 23> $Cutoff
 * @property bool $AllowUnassociatedTargets
 * @property bool $Enabled
 * @property bool $Replace
 */
class UpdateMaintenanceWindowRequest extends Request
{
    /**
     * @param array{
     *     WindowId: string,
     *     Name?: string,
     *     Description?: string,
     *     StartDate?: string,
     *     EndDate?: string,
     *     Schedule?: string,
     *     ScheduleTimezone?: string,
     *     ScheduleOffset?: int<1, 6>,
     *     Duration?: int<1, 24>,
     *     Cutoff?: int<0, 23>,
     *     AllowUnassociatedTargets?: bool,
     *     Enabled?: bool,
     *     Replace?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
