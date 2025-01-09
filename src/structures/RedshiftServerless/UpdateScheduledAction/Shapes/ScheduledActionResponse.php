<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateScheduledAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $namespaceName
 * @property list<\Aws\Api\DateTimeResult> $nextInvocations
 * @property string $roleArn
 * @property Schedule $schedule
 * @property string $scheduledActionDescription
 * @property string $scheduledActionName
 * @property string $scheduledActionUuid
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'ACTIVE'|'DISABLED' $state
 * @property TargetAction $targetAction
 */
class ScheduledActionResponse extends Shape
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult,
     *     namespaceName?: string,
     *     nextInvocations?: list<\Aws\Api\DateTimeResult>,
     *     roleArn?: string,
     *     schedule?: Schedule,
     *     scheduledActionDescription?: string,
     *     scheduledActionName?: string,
     *     scheduledActionUuid?: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     state?: 'ACTIVE'|'DISABLED',
     *     targetAction?: TargetAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
