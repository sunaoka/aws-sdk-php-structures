<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateScheduledAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $enabled
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $roleArn
 * @property Shapes\Schedule $schedule
 * @property string $scheduledActionDescription
 * @property string $scheduledActionName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property Shapes\TargetAction $targetAction
 */
class UpdateScheduledActionRequest extends Request
{
    /**
     * @param array{
     *     enabled?: bool,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     roleArn?: string,
     *     schedule?: Shapes\Schedule,
     *     scheduledActionDescription?: string,
     *     scheduledActionName: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     targetAction?: Shapes\TargetAction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
