<?php

namespace Sunaoka\Aws\Structures\Swf\CountClosedWorkflowExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\ExecutionTimeFilter|null $startTimeFilter
 * @property Shapes\ExecutionTimeFilter|null $closeTimeFilter
 * @property Shapes\WorkflowExecutionFilter|null $executionFilter
 * @property Shapes\WorkflowTypeFilter|null $typeFilter
 * @property Shapes\TagFilter|null $tagFilter
 * @property Shapes\CloseStatusFilter|null $closeStatusFilter
 */
class CountClosedWorkflowExecutionsRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     startTimeFilter?: Shapes\ExecutionTimeFilter|null,
     *     closeTimeFilter?: Shapes\ExecutionTimeFilter|null,
     *     executionFilter?: Shapes\WorkflowExecutionFilter|null,
     *     typeFilter?: Shapes\WorkflowTypeFilter|null,
     *     tagFilter?: Shapes\TagFilter|null,
     *     closeStatusFilter?: Shapes\CloseStatusFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
