<?php

namespace Sunaoka\Aws\Structures\Scheduler\UpdateSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'DELETE' $ActionAfterCompletion
 * @property string $ClientToken
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property Shapes\FlexibleTimeWindow $FlexibleTimeWindow
 * @property string $GroupName
 * @property string $KmsKeyArn
 * @property string $Name
 * @property string $ScheduleExpression
 * @property string $ScheduleExpressionTimezone
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property 'ENABLED'|'DISABLED' $State
 * @property Shapes\Target $Target
 */
class UpdateScheduleRequest extends Request
{
    /**
     * @param array{
     *     ActionAfterCompletion?: 'NONE'|'DELETE',
     *     ClientToken?: string,
     *     Description?: string,
     *     EndDate?: \Aws\Api\DateTimeResult,
     *     FlexibleTimeWindow: Shapes\FlexibleTimeWindow,
     *     GroupName?: string,
     *     KmsKeyArn?: string,
     *     Name: string,
     *     ScheduleExpression: string,
     *     ScheduleExpressionTimezone?: string,
     *     StartDate?: \Aws\Api\DateTimeResult,
     *     State?: 'ENABLED'|'DISABLED',
     *     Target: Shapes\Target
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
