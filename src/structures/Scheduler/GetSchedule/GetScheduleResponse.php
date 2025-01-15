<?php

namespace Sunaoka\Aws\Structures\Scheduler\GetSchedule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'NONE'|'DELETE'|null $ActionAfterCompletion
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property Shapes\FlexibleTimeWindow|null $FlexibleTimeWindow
 * @property string|null $GroupName
 * @property string|null $KmsKeyArn
 * @property \Aws\Api\DateTimeResult|null $LastModificationDate
 * @property string|null $Name
 * @property string|null $ScheduleExpression
 * @property string|null $ScheduleExpressionTimezone
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property 'ENABLED'|'DISABLED'|null $State
 * @property Shapes\Target|null $Target
 */
class GetScheduleResponse extends Response
{
}
