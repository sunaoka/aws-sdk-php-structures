<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WindowId
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $StartDate
 * @property string|null $EndDate
 * @property string|null $Schedule
 * @property string|null $ScheduleTimezone
 * @property int<1, 6>|null $ScheduleOffset
 * @property string|null $NextExecutionTime
 * @property int<1, 24>|null $Duration
 * @property int<0, 23>|null $Cutoff
 * @property bool|null $AllowUnassociatedTargets
 * @property bool|null $Enabled
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property \Aws\Api\DateTimeResult|null $ModifiedDate
 */
class GetMaintenanceWindowResponse extends Response
{
}
