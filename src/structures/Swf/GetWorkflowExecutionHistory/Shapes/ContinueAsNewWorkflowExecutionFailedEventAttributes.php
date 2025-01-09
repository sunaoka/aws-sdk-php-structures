<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UNHANDLED_DECISION'|'WORKFLOW_TYPE_DEPRECATED'|'WORKFLOW_TYPE_DOES_NOT_EXIST'|'DEFAULT_EXECUTION_START_TO_CLOSE_TIMEOUT_UNDEFINED'|'DEFAULT_TASK_START_TO_CLOSE_TIMEOUT_UNDEFINED'|'DEFAULT_TASK_LIST_UNDEFINED'|'DEFAULT_CHILD_POLICY_UNDEFINED'|'CONTINUE_AS_NEW_WORKFLOW_EXECUTION_RATE_EXCEEDED'|'OPERATION_NOT_PERMITTED' $cause
 * @property int $decisionTaskCompletedEventId
 */
class ContinueAsNewWorkflowExecutionFailedEventAttributes extends Shape
{
    /**
     * @param array{
     *     cause: 'UNHANDLED_DECISION'|'WORKFLOW_TYPE_DEPRECATED'|'WORKFLOW_TYPE_DOES_NOT_EXIST'|'DEFAULT_EXECUTION_START_TO_CLOSE_TIMEOUT_UNDEFINED'|'DEFAULT_TASK_START_TO_CLOSE_TIMEOUT_UNDEFINED'|'DEFAULT_TASK_LIST_UNDEFINED'|'DEFAULT_CHILD_POLICY_UNDEFINED'|'CONTINUE_AS_NEW_WORKFLOW_EXECUTION_RATE_EXCEEDED'|'OPERATION_NOT_PERMITTED',
     *     decisionTaskCompletedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
