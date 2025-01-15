<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateScheduledAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ScheduledActionName
 * @property Shapes\ScheduledActionType|null $TargetAction
 * @property string|null $Schedule
 * @property string|null $IamRole
 * @property string|null $ScheduledActionDescription
 * @property 'ACTIVE'|'DISABLED'|null $State
 * @property list<\Aws\Api\DateTimeResult>|null $NextInvocations
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class CreateScheduledActionResponse extends Response
{
}
