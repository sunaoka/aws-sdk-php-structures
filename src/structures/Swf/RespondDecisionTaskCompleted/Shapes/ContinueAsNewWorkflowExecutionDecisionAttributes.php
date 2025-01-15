<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $input
 * @property string|null $executionStartToCloseTimeout
 * @property TaskList|null $taskList
 * @property string|null $taskPriority
 * @property string|null $taskStartToCloseTimeout
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON'|null $childPolicy
 * @property list<string>|null $tagList
 * @property string|null $workflowTypeVersion
 * @property string|null $lambdaRole
 */
class ContinueAsNewWorkflowExecutionDecisionAttributes extends Shape
{
    /**
     * @param array{
     *     input?: string|null,
     *     executionStartToCloseTimeout?: string|null,
     *     taskList?: TaskList|null,
     *     taskPriority?: string|null,
     *     taskStartToCloseTimeout?: string|null,
     *     childPolicy?: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON'|null,
     *     tagList?: list<string>|null,
     *     workflowTypeVersion?: string|null,
     *     lambdaRole?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
