<?php

namespace Sunaoka\Aws\Structures\Scheduler\UpdateSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $GroupName
 * @property string $ScheduleExpression
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property string|null $Description
 * @property string|null $ScheduleExpressionTimezone
 * @property 'ENABLED'|'DISABLED'|null $State
 * @property string|null $KmsKeyArn
 * @property Shapes\Target $Target
 * @property Shapes\FlexibleTimeWindow $FlexibleTimeWindow
 * @property string|null $ClientToken
 * @property 'NONE'|'DELETE'|null $ActionAfterCompletion
 */
class UpdateScheduleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     GroupName?: string|null,
     *     ScheduleExpression: string,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     ScheduleExpressionTimezone?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|null,
     *     KmsKeyArn?: string|null,
     *     Target: Shapes\Target,
     *     FlexibleTimeWindow: Shapes\FlexibleTimeWindow,
     *     ClientToken?: string|null,
     *     ActionAfterCompletion?: 'NONE'|'DELETE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
