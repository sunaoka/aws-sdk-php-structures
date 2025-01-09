<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $input
 * @property string $executionStartToCloseTimeout
 * @property string $taskStartToCloseTimeout
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON' $childPolicy
 * @property TaskList $taskList
 * @property string $taskPriority
 * @property WorkflowType $workflowType
 * @property list<string> $tagList
 * @property string $continuedExecutionRunId
 * @property WorkflowExecution $parentWorkflowExecution
 * @property int $parentInitiatedEventId
 * @property string $lambdaRole
 */
class WorkflowExecutionStartedEventAttributes extends Shape
{
    /**
     * @param array{
     *     input?: string,
     *     executionStartToCloseTimeout?: string,
     *     taskStartToCloseTimeout?: string,
     *     childPolicy: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON',
     *     taskList: TaskList,
     *     taskPriority?: string,
     *     workflowType: WorkflowType,
     *     tagList?: list<string>,
     *     continuedExecutionRunId?: string,
     *     parentWorkflowExecution?: WorkflowExecution,
     *     parentInitiatedEventId?: int,
     *     lambdaRole?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
