<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeWorkflowType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $defaultTaskStartToCloseTimeout
 * @property string|null $defaultExecutionStartToCloseTimeout
 * @property TaskList|null $defaultTaskList
 * @property string|null $defaultTaskPriority
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON'|null $defaultChildPolicy
 * @property string|null $defaultLambdaRole
 */
class WorkflowTypeConfiguration extends Shape
{
    /**
     * @param array{
     *     defaultTaskStartToCloseTimeout?: string|null,
     *     defaultExecutionStartToCloseTimeout?: string|null,
     *     defaultTaskList?: TaskList|null,
     *     defaultTaskPriority?: string|null,
     *     defaultChildPolicy?: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON'|null,
     *     defaultLambdaRole?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
