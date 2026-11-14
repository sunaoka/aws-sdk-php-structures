<?php

namespace Sunaoka\Aws\Structures\Scheduler\GetSchedule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $GroupName
 * @property string|null $Name
 * @property string|null $ScheduleExpression
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property string|null $Description
 * @property string|null $ScheduleExpressionTimezone
 * @property 'ENABLED'|'DISABLED'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $LastModificationDate
 * @property string|null $KmsKeyArn
 * @property Shapes\Target|null $Target
 * @property Shapes\FlexibleTimeWindow|null $FlexibleTimeWindow
 * @property 'NONE'|'DELETE'|null $ActionAfterCompletion
 */
class GetScheduleResponse extends Response
{
}
