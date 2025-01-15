<?php

namespace Sunaoka\Aws\Structures\Scheduler\CreateSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'DELETE'|null $ActionAfterCompletion
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property Shapes\FlexibleTimeWindow $FlexibleTimeWindow
 * @property string|null $GroupName
 * @property string|null $KmsKeyArn
 * @property string $Name
 * @property string $ScheduleExpression
 * @property string|null $ScheduleExpressionTimezone
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property 'ENABLED'|'DISABLED'|null $State
 * @property Shapes\Target $Target
 */
class CreateScheduleRequest extends Request
{
    /**
     * @param array{
     *     ActionAfterCompletion?: 'NONE'|'DELETE'|null,
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     FlexibleTimeWindow: Shapes\FlexibleTimeWindow,
     *     GroupName?: string|null,
     *     KmsKeyArn?: string|null,
     *     Name: string,
     *     ScheduleExpression: string,
     *     ScheduleExpressionTimezone?: string|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     State?: 'ENABLED'|'DISABLED'|null,
     *     Target: Shapes\Target
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
