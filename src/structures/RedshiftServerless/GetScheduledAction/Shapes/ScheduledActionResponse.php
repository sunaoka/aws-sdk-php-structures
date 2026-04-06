<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetScheduledAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $namespaceName
 * @property list<\Aws\Api\DateTimeResult>|null $nextInvocations
 * @property string|null $roleArn
 * @property Schedule|null $schedule
 * @property string|null $scheduledActionDescription
 * @property string|null $scheduledActionName
 * @property string|null $scheduledActionUuid
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'ACTIVE'|'DISABLED'|null $state
 * @property TargetAction|null $targetAction
 */
class ScheduledActionResponse extends Shape
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     namespaceName?: string|null,
     *     nextInvocations?: list<\Aws\Api\DateTimeResult>|null,
     *     roleArn?: string|null,
     *     schedule?: Schedule|null,
     *     scheduledActionDescription?: string|null,
     *     scheduledActionName?: string|null,
     *     scheduledActionUuid?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     state?: 'ACTIVE'|'DISABLED'|null,
     *     targetAction?: TargetAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
