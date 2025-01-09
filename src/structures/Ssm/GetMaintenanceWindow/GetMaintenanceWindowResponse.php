<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindow;

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
 * @property string $NextExecutionTime
 * @property int $Duration
 * @property int $Cutoff
 * @property bool $AllowUnassociatedTargets
 * @property bool $Enabled
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property \Aws\Api\DateTimeResult $ModifiedDate
 */
class GetMaintenanceWindowResponse extends Response
{
}
