<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkflowType $workflowType
 * @property string $workflowId
 * @property string $control
 * @property string $input
 * @property string $executionStartToCloseTimeout
 * @property TaskList $taskList
 * @property string $taskPriority
 * @property string $taskStartToCloseTimeout
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON' $childPolicy
 * @property list<string> $tagList
 * @property string $lambdaRole
 */
class StartChildWorkflowExecutionDecisionAttributes extends Shape
{
    /**
     * @param array{
     *     workflowType: WorkflowType,
     *     workflowId: string,
     *     control?: string,
     *     input?: string,
     *     executionStartToCloseTimeout?: string,
     *     taskList?: TaskList,
     *     taskPriority?: string,
     *     taskStartToCloseTimeout?: string,
     *     childPolicy?: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON',
     *     tagList?: list<string>,
     *     lambdaRole?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
