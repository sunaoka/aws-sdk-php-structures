<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateMaintenanceWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $StartDate
 * @property string $EndDate
 * @property string $Schedule
 * @property string $ScheduleTimezone
 * @property int $ScheduleOffset
 * @property int $Duration
 * @property int $Cutoff
 * @property bool $AllowUnassociatedTargets
 * @property string $ClientToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateMaintenanceWindowRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     StartDate?: string,
     *     EndDate?: string,
     *     Schedule: string,
     *     ScheduleTimezone?: string,
     *     ScheduleOffset?: int,
     *     Duration: int,
     *     Cutoff: int,
     *     AllowUnassociatedTargets: bool,
     *     ClientToken?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
