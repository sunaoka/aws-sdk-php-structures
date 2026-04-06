<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateScheduledAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $enabled
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string $namespaceName
 * @property string $roleArn
 * @property Shapes\Schedule $schedule
 * @property string|null $scheduledActionDescription
 * @property string $scheduledActionName
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property Shapes\TargetAction $targetAction
 */
class CreateScheduledActionRequest extends Request
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     namespaceName: string,
     *     roleArn: string,
     *     schedule: Shapes\Schedule,
     *     scheduledActionDescription?: string|null,
     *     scheduledActionName: string,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     targetAction: Shapes\TargetAction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
