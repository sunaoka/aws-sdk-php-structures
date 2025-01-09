<?php

namespace Sunaoka\Aws\Structures\Swf\CountClosedWorkflowExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\ExecutionTimeFilter $startTimeFilter
 * @property Shapes\ExecutionTimeFilter $closeTimeFilter
 * @property Shapes\WorkflowExecutionFilter $executionFilter
 * @property Shapes\WorkflowTypeFilter $typeFilter
 * @property Shapes\TagFilter $tagFilter
 * @property Shapes\CloseStatusFilter $closeStatusFilter
 */
class CountClosedWorkflowExecutionsRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     startTimeFilter?: Shapes\ExecutionTimeFilter,
     *     closeTimeFilter?: Shapes\ExecutionTimeFilter,
     *     executionFilter?: Shapes\WorkflowExecutionFilter,
     *     typeFilter?: Shapes\WorkflowTypeFilter,
     *     tagFilter?: Shapes\TagFilter,
     *     closeStatusFilter?: Shapes\CloseStatusFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
