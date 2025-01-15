<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateMaintenanceWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string|null $StartDate
 * @property string|null $EndDate
 * @property string $Schedule
 * @property string|null $ScheduleTimezone
 * @property int<1, 6>|null $ScheduleOffset
 * @property int<1, 24> $Duration
 * @property int<0, 23> $Cutoff
 * @property bool $AllowUnassociatedTargets
 * @property string|null $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateMaintenanceWindowRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     StartDate?: string|null,
     *     EndDate?: string|null,
     *     Schedule: string,
     *     ScheduleTimezone?: string|null,
     *     ScheduleOffset?: int<1, 6>|null,
     *     Duration: int<1, 24>,
     *     Cutoff: int<0, 23>,
     *     AllowUnassociatedTargets: bool,
     *     ClientToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
