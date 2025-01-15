<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $input
 * @property int $decisionTaskCompletedEventId
 * @property string $newExecutionRunId
 * @property string|null $executionStartToCloseTimeout
 * @property TaskList $taskList
 * @property string|null $taskPriority
 * @property string|null $taskStartToCloseTimeout
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON' $childPolicy
 * @property list<string>|null $tagList
 * @property WorkflowType $workflowType
 * @property string|null $lambdaRole
 */
class WorkflowExecutionContinuedAsNewEventAttributes extends Shape
{
    /**
     * @param array{
     *     input?: string|null,
     *     decisionTaskCompletedEventId: int,
     *     newExecutionRunId: string,
     *     executionStartToCloseTimeout?: string|null,
     *     taskList: TaskList,
     *     taskPriority?: string|null,
     *     taskStartToCloseTimeout?: string|null,
     *     childPolicy: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON',
     *     tagList?: list<string>|null,
     *     workflowType: WorkflowType,
     *     lambdaRole?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
