<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeWorkflowExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskStartToCloseTimeout
 * @property string $executionStartToCloseTimeout
 * @property TaskList $taskList
 * @property string|null $taskPriority
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON' $childPolicy
 * @property string|null $lambdaRole
 */
class WorkflowExecutionConfiguration extends Shape
{
    /**
     * @param array{
     *     taskStartToCloseTimeout: string,
     *     executionStartToCloseTimeout: string,
     *     taskList: TaskList,
     *     taskPriority?: string|null,
     *     childPolicy: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON',
     *     lambdaRole?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
