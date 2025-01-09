<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkflowType $workflowType
 * @property 'WORKFLOW_TYPE_DOES_NOT_EXIST'|'WORKFLOW_TYPE_DEPRECATED'|'OPEN_CHILDREN_LIMIT_EXCEEDED'|'OPEN_WORKFLOWS_LIMIT_EXCEEDED'|'CHILD_CREATION_RATE_EXCEEDED'|'WORKFLOW_ALREADY_RUNNING'|'DEFAULT_EXECUTION_START_TO_CLOSE_TIMEOUT_UNDEFINED'|'DEFAULT_TASK_LIST_UNDEFINED'|'DEFAULT_TASK_START_TO_CLOSE_TIMEOUT_UNDEFINED'|'DEFAULT_CHILD_POLICY_UNDEFINED'|'OPERATION_NOT_PERMITTED' $cause
 * @property string $workflowId
 * @property int $initiatedEventId
 * @property int $decisionTaskCompletedEventId
 * @property string $control
 */
class StartChildWorkflowExecutionFailedEventAttributes extends Shape
{
    /**
     * @param array{
     *     workflowType: WorkflowType,
     *     cause: 'WORKFLOW_TYPE_DOES_NOT_EXIST'|'WORKFLOW_TYPE_DEPRECATED'|'OPEN_CHILDREN_LIMIT_EXCEEDED'|'OPEN_WORKFLOWS_LIMIT_EXCEEDED'|'CHILD_CREATION_RATE_EXCEEDED'|'WORKFLOW_ALREADY_RUNNING'|'DEFAULT_EXECUTION_START_TO_CLOSE_TIMEOUT_UNDEFINED'|'DEFAULT_TASK_LIST_UNDEFINED'|'DEFAULT_TASK_START_TO_CLOSE_TIMEOUT_UNDEFINED'|'DEFAULT_CHILD_POLICY_UNDEFINED'|'OPERATION_NOT_PERMITTED',
     *     workflowId: string,
     *     initiatedEventId: int,
     *     decisionTaskCompletedEventId: int,
     *     control?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
