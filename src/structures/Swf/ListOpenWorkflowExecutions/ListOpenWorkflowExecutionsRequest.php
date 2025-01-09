<?php

namespace Sunaoka\Aws\Structures\Swf\ListOpenWorkflowExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\ExecutionTimeFilter $startTimeFilter
 * @property Shapes\WorkflowTypeFilter $typeFilter
 * @property Shapes\TagFilter $tagFilter
 * @property string $nextPageToken
 * @property int $maximumPageSize
 * @property bool $reverseOrder
 * @property Shapes\WorkflowExecutionFilter $executionFilter
 */
class ListOpenWorkflowExecutionsRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     startTimeFilter: Shapes\ExecutionTimeFilter,
     *     typeFilter?: Shapes\WorkflowTypeFilter,
     *     tagFilter?: Shapes\TagFilter,
     *     nextPageToken?: string,
     *     maximumPageSize?: int,
     *     reverseOrder?: bool,
     *     executionFilter?: Shapes\WorkflowExecutionFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
