<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateScheduledAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScheduledActionName
 * @property Shapes\ScheduledActionType $TargetAction
 * @property string $Schedule
 * @property string $IamRole
 * @property string $ScheduledActionDescription
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property bool $Enable
 */
class CreateScheduledActionRequest extends Request
{
    /**
     * @param array{
     *     ScheduledActionName: string,
     *     TargetAction: Shapes\ScheduledActionType,
     *     Schedule: string,
     *     IamRole: string,
     *     ScheduledActionDescription?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Enable?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
