<?php

namespace Sunaoka\Aws\Structures\Swf\ListClosedWorkflowExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\ExecutionTimeFilter $startTimeFilter
 * @property Shapes\ExecutionTimeFilter $closeTimeFilter
 * @property Shapes\WorkflowExecutionFilter $executionFilter
 * @property Shapes\CloseStatusFilter $closeStatusFilter
 * @property Shapes\WorkflowTypeFilter $typeFilter
 * @property Shapes\TagFilter $tagFilter
 * @property string $nextPageToken
 * @property int<0, 1000> $maximumPageSize
 * @property bool $reverseOrder
 */
class ListClosedWorkflowExecutionsRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     startTimeFilter?: Shapes\ExecutionTimeFilter,
     *     closeTimeFilter?: Shapes\ExecutionTimeFilter,
     *     executionFilter?: Shapes\WorkflowExecutionFilter,
     *     closeStatusFilter?: Shapes\CloseStatusFilter,
     *     typeFilter?: Shapes\WorkflowTypeFilter,
     *     tagFilter?: Shapes\TagFilter,
     *     nextPageToken?: string,
     *     maximumPageSize?: int<0, 1000>,
     *     reverseOrder?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
