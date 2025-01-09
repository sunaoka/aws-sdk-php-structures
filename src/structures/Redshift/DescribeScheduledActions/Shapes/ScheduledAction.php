<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeScheduledActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduledActionName
 * @property ScheduledActionType $TargetAction
 * @property string $Schedule
 * @property string $IamRole
 * @property string $ScheduledActionDescription
 * @property 'ACTIVE'|'DISABLED' $State
 * @property list<\Aws\Api\DateTimeResult> $NextInvocations
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class ScheduledAction extends Shape
{
    /**
     * @param array{
     *     ScheduledActionName?: string,
     *     TargetAction?: ScheduledActionType,
     *     Schedule?: string,
     *     IamRole?: string,
     *     ScheduledActionDescription?: string,
     *     State?: 'ACTIVE'|'DISABLED',
     *     NextInvocations?: list<\Aws\Api\DateTimeResult>,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
