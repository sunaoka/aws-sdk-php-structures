<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $StartDate
 * @property string|null $EndDate
 * @property string|null $Schedule
 * @property string|null $ScheduleTimezone
 * @property int<1, 6>|null $ScheduleOffset
 * @property int<1, 24>|null $Duration
 * @property int<0, 23>|null $Cutoff
 * @property bool|null $AllowUnassociatedTargets
 * @property bool|null $Enabled
 * @property bool|null $Replace
 */
class UpdateMaintenanceWindowRequest extends Request
{
    /**
     * @param array{
     *     WindowId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     StartDate?: string|null,
     *     EndDate?: string|null,
     *     Schedule?: string|null,
     *     ScheduleTimezone?: string|null,
     *     ScheduleOffset?: int<1, 6>|null,
     *     Duration?: int<1, 24>|null,
     *     Cutoff?: int<0, 23>|null,
     *     AllowUnassociatedTargets?: bool|null,
     *     Enabled?: bool|null,
     *     Replace?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
