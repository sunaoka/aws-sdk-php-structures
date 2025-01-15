<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkflowType $workflowType
 * @property string $workflowId
 * @property string|null $control
 * @property string|null $input
 * @property string|null $executionStartToCloseTimeout
 * @property TaskList|null $taskList
 * @property string|null $taskPriority
 * @property string|null $taskStartToCloseTimeout
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON'|null $childPolicy
 * @property list<string>|null $tagList
 * @property string|null $lambdaRole
 */
class StartChildWorkflowExecutionDecisionAttributes extends Shape
{
    /**
     * @param array{
     *     workflowType: WorkflowType,
     *     workflowId: string,
     *     control?: string|null,
     *     input?: string|null,
     *     executionStartToCloseTimeout?: string|null,
     *     taskList?: TaskList|null,
     *     taskPriority?: string|null,
     *     taskStartToCloseTimeout?: string|null,
     *     childPolicy?: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON'|null,
     *     tagList?: list<string>|null,
     *     lambdaRole?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
