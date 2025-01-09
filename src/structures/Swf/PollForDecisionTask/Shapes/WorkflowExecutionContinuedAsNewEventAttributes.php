<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $input
 * @property int $decisionTaskCompletedEventId
 * @property string $newExecutionRunId
 * @property string $executionStartToCloseTimeout
 * @property TaskList $taskList
 * @property string $taskPriority
 * @property string $taskStartToCloseTimeout
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON' $childPolicy
 * @property list<string> $tagList
 * @property WorkflowType $workflowType
 * @property string $lambdaRole
 */
class WorkflowExecutionContinuedAsNewEventAttributes extends Shape
{
    /**
     * @param array{
     *     input?: string,
     *     decisionTaskCompletedEventId: int,
     *     newExecutionRunId: string,
     *     executionStartToCloseTimeout?: string,
     *     taskList: TaskList,
     *     taskPriority?: string,
     *     taskStartToCloseTimeout?: string,
     *     childPolicy: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON',
     *     tagList?: list<string>,
     *     workflowType: WorkflowType,
     *     lambdaRole?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
