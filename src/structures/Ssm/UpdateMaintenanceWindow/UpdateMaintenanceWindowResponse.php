<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WindowId
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
 * @property bool $Enabled
 */
class UpdateMaintenanceWindowResponse extends Response
{
}
