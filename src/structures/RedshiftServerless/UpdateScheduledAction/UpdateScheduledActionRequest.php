<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateScheduledAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $enabled
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $roleArn
 * @property Shapes\Schedule|null $schedule
 * @property string|null $scheduledActionDescription
 * @property string $scheduledActionName
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property Shapes\TargetAction|null $targetAction
 */
class UpdateScheduledActionRequest extends Request
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     roleArn?: string|null,
     *     schedule?: Shapes\Schedule|null,
     *     scheduledActionDescription?: string|null,
     *     scheduledActionName: string,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     targetAction?: Shapes\TargetAction|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
