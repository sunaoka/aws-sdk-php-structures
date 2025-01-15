<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $input
 * @property string|null $executionStartToCloseTimeout
 * @property string|null $taskStartToCloseTimeout
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON' $childPolicy
 * @property TaskList $taskList
 * @property string|null $taskPriority
 * @property WorkflowType $workflowType
 * @property list<string>|null $tagList
 * @property string|null $continuedExecutionRunId
 * @property WorkflowExecution|null $parentWorkflowExecution
 * @property int|null $parentInitiatedEventId
 * @property string|null $lambdaRole
 */
class WorkflowExecutionStartedEventAttributes extends Shape
{
    /**
     * @param array{
     *     input?: string|null,
     *     executionStartToCloseTimeout?: string|null,
     *     taskStartToCloseTimeout?: string|null,
     *     childPolicy: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON',
     *     taskList: TaskList,
     *     taskPriority?: string|null,
     *     workflowType: WorkflowType,
     *     tagList?: list<string>|null,
     *     continuedExecutionRunId?: string|null,
     *     parentWorkflowExecution?: WorkflowExecution|null,
     *     parentInitiatedEventId?: int|null,
     *     lambdaRole?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
