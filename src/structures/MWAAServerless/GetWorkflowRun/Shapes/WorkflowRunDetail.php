<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\GetWorkflowRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WorkflowArn
 * @property string|null $WorkflowVersion
 * @property string|null $RunId
 * @property 'ON_DEMAND'|'SCHEDULED'|null $RunType
 * @property \Aws\Api\DateTimeResult|null $StartedOn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $CompletedOn
 * @property \Aws\Api\DateTimeResult|null $ModifiedAt
 * @property int|null $Duration
 * @property string|null $ErrorMessage
 * @property list<string>|null $TaskInstances
 * @property 'STARTING'|'QUEUED'|'RUNNING'|'SUCCESS'|'FAILED'|'TIMEOUT'|'STOPPING'|'STOPPED'|null $RunState
 */
class WorkflowRunDetail extends Shape
{
    /**
     * @param array{
     *     WorkflowArn?: string|null,
     *     WorkflowVersion?: string|null,
     *     RunId?: string|null,
     *     RunType?: 'ON_DEMAND'|'SCHEDULED'|null,
     *     StartedOn?: \Aws\Api\DateTimeResult|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     CompletedOn?: \Aws\Api\DateTimeResult|null,
     *     ModifiedAt?: \Aws\Api\DateTimeResult|null,
     *     Duration?: int|null,
     *     ErrorMessage?: string|null,
     *     TaskInstances?: list<string>|null,
     *     RunState?: 'STARTING'|'QUEUED'|'RUNNING'|'SUCCESS'|'FAILED'|'TIMEOUT'|'STOPPING'|'STOPPED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
