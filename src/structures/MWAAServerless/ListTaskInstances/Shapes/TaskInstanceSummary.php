<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\ListTaskInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WorkflowArn
 * @property string|null $WorkflowVersion
 * @property string|null $RunId
 * @property string|null $TaskInstanceId
 * @property 'QUEUED'|'FAILED'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'UP_FOR_RESCHEDULE'|'UP_FOR_RETRY'|'UPSTREAM_FAILED'|'REMOVED'|'RESTARTING'|'DEFERRED'|'NONE'|'CANCELLED'|'TIMEOUT'|null $Status
 * @property int|null $DurationInSeconds
 * @property string|null $OperatorName
 */
class TaskInstanceSummary extends Shape
{
    /**
     * @param array{
     *     WorkflowArn?: string|null,
     *     WorkflowVersion?: string|null,
     *     RunId?: string|null,
     *     TaskInstanceId?: string|null,
     *     Status?: 'QUEUED'|'FAILED'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'UP_FOR_RESCHEDULE'|'UP_FOR_RETRY'|'UPSTREAM_FAILED'|'REMOVED'|'RESTARTING'|'DEFERRED'|'NONE'|'CANCELLED'|'TIMEOUT'|null,
     *     DurationInSeconds?: int|null,
     *     OperatorName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
