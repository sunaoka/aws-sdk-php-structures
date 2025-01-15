<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateScheduledAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScheduledActionName
 * @property Shapes\ScheduledActionType $TargetAction
 * @property string $Schedule
 * @property string $IamRole
 * @property string|null $ScheduledActionDescription
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property bool|null $Enable
 */
class CreateScheduledActionRequest extends Request
{
    /**
     * @param array{
     *     ScheduledActionName: string,
     *     TargetAction: Shapes\ScheduledActionType,
     *     Schedule: string,
     *     IamRole: string,
     *     ScheduledActionDescription?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Enable?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
