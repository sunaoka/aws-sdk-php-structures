<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyScheduledAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ScheduledActionName
 * @property Shapes\ScheduledActionType $TargetAction
 * @property string $Schedule
 * @property string $IamRole
 * @property string $ScheduledActionDescription
 * @property 'ACTIVE'|'DISABLED' $State
 * @property list<\Aws\Api\DateTimeResult> $NextInvocations
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class ModifyScheduledActionResponse extends Response
{
}
