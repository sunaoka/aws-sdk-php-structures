<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateScheduledAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $enabled
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $namespaceName
 * @property string $roleArn
 * @property Shapes\Schedule $schedule
 * @property string $scheduledActionDescription
 * @property string $scheduledActionName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property Shapes\TargetAction $targetAction
 */
class CreateScheduledActionRequest extends Request
{
    /**
     * @param array{
     *     enabled?: bool,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     namespaceName: string,
     *     roleArn: string,
     *     schedule: Shapes\Schedule,
     *     scheduledActionDescription?: string,
     *     scheduledActionName: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     targetAction: Shapes\TargetAction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
