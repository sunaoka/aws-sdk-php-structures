<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowId
 * @property WorkflowType $workflowType
 * @property string $control
 * @property string $input
 * @property string $executionStartToCloseTimeout
 * @property TaskList $taskList
 * @property string $taskPriority
 * @property int $decisionTaskCompletedEventId
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON' $childPolicy
 * @property string $taskStartToCloseTimeout
 * @property list<string> $tagList
 * @property string $lambdaRole
 */
class StartChildWorkflowExecutionInitiatedEventAttributes extends Shape
{
    /**
     * @param array{
     *     workflowId: string,
     *     workflowType: WorkflowType,
     *     control?: string,
     *     input?: string,
     *     executionStartToCloseTimeout?: string,
     *     taskList: TaskList,
     *     taskPriority?: string,
     *     decisionTaskCompletedEventId: int,
     *     childPolicy: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON',
     *     taskStartToCloseTimeout?: string,
     *     tagList?: list<string>,
     *     lambdaRole?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
