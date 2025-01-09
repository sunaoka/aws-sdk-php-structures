<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeWorkflowType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $defaultTaskStartToCloseTimeout
 * @property string $defaultExecutionStartToCloseTimeout
 * @property TaskList $defaultTaskList
 * @property string $defaultTaskPriority
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON' $defaultChildPolicy
 * @property string $defaultLambdaRole
 */
class WorkflowTypeConfiguration extends Shape
{
    /**
     * @param array{
     *     defaultTaskStartToCloseTimeout?: string,
     *     defaultExecutionStartToCloseTimeout?: string,
     *     defaultTaskList?: TaskList,
     *     defaultTaskPriority?: string,
     *     defaultChildPolicy?: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON',
     *     defaultLambdaRole?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
