<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowId
 * @property WorkflowType $workflowType
 * @property string|null $control
 * @property string|null $input
 * @property string|null $executionStartToCloseTimeout
 * @property TaskList $taskList
 * @property string|null $taskPriority
 * @property int $decisionTaskCompletedEventId
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON' $childPolicy
 * @property string|null $taskStartToCloseTimeout
 * @property list<string>|null $tagList
 * @property string|null $lambdaRole
 */
class StartChildWorkflowExecutionInitiatedEventAttributes extends Shape
{
    /**
     * @param array{
     *     workflowId: string,
     *     workflowType: WorkflowType,
     *     control?: string|null,
     *     input?: string|null,
     *     executionStartToCloseTimeout?: string|null,
     *     taskList: TaskList,
     *     taskPriority?: string|null,
     *     decisionTaskCompletedEventId: int,
     *     childPolicy: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON',
     *     taskStartToCloseTimeout?: string|null,
     *     tagList?: list<string>|null,
     *     lambdaRole?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
