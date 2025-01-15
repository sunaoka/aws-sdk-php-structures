<?php

namespace Sunaoka\Aws\Structures\Swf\CountOpenWorkflowExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\ExecutionTimeFilter $startTimeFilter
 * @property Shapes\WorkflowTypeFilter|null $typeFilter
 * @property Shapes\TagFilter|null $tagFilter
 * @property Shapes\WorkflowExecutionFilter|null $executionFilter
 */
class CountOpenWorkflowExecutionsRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     startTimeFilter: Shapes\ExecutionTimeFilter,
     *     typeFilter?: Shapes\WorkflowTypeFilter|null,
     *     tagFilter?: Shapes\TagFilter|null,
     *     executionFilter?: Shapes\WorkflowExecutionFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
