<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeScheduledActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ScheduledActionName
 * @property ScheduledActionType|null $TargetAction
 * @property string|null $Schedule
 * @property string|null $IamRole
 * @property string|null $ScheduledActionDescription
 * @property 'ACTIVE'|'DISABLED'|null $State
 * @property list<\Aws\Api\DateTimeResult>|null $NextInvocations
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class ScheduledAction extends Shape
{
    /**
     * @param array{
     *     ScheduledActionName?: string|null,
     *     TargetAction?: ScheduledActionType|null,
     *     Schedule?: string|null,
     *     IamRole?: string|null,
     *     ScheduledActionDescription?: string|null,
     *     State?: 'ACTIVE'|'DISABLED'|null,
     *     NextInvocations?: list<\Aws\Api\DateTimeResult>|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
