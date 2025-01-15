<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyScheduledAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScheduledActionName
 * @property Shapes\ScheduledActionType|null $TargetAction
 * @property string|null $Schedule
 * @property string|null $IamRole
 * @property string|null $ScheduledActionDescription
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property bool|null $Enable
 */
class ModifyScheduledActionRequest extends Request
{
    /**
     * @param array{
     *     ScheduledActionName: string,
     *     TargetAction?: Shapes\ScheduledActionType|null,
     *     Schedule?: string|null,
     *     IamRole?: string|null,
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
