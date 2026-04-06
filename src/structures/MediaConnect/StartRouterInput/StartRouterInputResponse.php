<?php

namespace Sunaoka\Aws\Structures\MediaConnect\StartRouterInput;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property 'CREATING'|'STANDBY'|'STARTING'|'ACTIVE'|'STOPPING'|'DELETING'|'UPDATING'|'ERROR'|'RECOVERING'|'MIGRATING' $State
 * @property 'WINDOW' $MaintenanceScheduleType
 * @property Shapes\MaintenanceSchedule $MaintenanceSchedule
 */
class StartRouterInputResponse extends Response
{
}
