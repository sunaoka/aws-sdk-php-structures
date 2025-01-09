<?php

namespace Sunaoka\Aws\Structures\Swf\CountOpenWorkflowExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\ExecutionTimeFilter $startTimeFilter
 * @property Shapes\WorkflowTypeFilter $typeFilter
 * @property Shapes\TagFilter $tagFilter
 * @property Shapes\WorkflowExecutionFilter $executionFilter
 */
class CountOpenWorkflowExecutionsRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     startTimeFilter: Shapes\ExecutionTimeFilter,
     *     typeFilter?: Shapes\WorkflowTypeFilter,
     *     tagFilter?: Shapes\TagFilter,
     *     executionFilter?: Shapes\WorkflowExecutionFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
