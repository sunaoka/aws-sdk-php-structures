<?php

namespace Sunaoka\Aws\Structures\Scheduler\GetSchedule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'NONE'|'DELETE' $ActionAfterCompletion
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property Shapes\FlexibleTimeWindow $FlexibleTimeWindow
 * @property string $GroupName
 * @property string $KmsKeyArn
 * @property \Aws\Api\DateTimeResult $LastModificationDate
 * @property string $Name
 * @property string $ScheduleExpression
 * @property string $ScheduleExpressionTimezone
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property 'ENABLED'|'DISABLED' $State
 * @property Shapes\Target $Target
 */
class GetScheduleResponse extends Response
{
}
