<?php

namespace Sunaoka\Aws\Structures\Swf\ListClosedWorkflowExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\ExecutionTimeFilter|null $startTimeFilter
 * @property Shapes\ExecutionTimeFilter|null $closeTimeFilter
 * @property Shapes\WorkflowExecutionFilter|null $executionFilter
 * @property Shapes\CloseStatusFilter|null $closeStatusFilter
 * @property Shapes\WorkflowTypeFilter|null $typeFilter
 * @property Shapes\TagFilter|null $tagFilter
 * @property string|null $nextPageToken
 * @property int<0, 1000>|null $maximumPageSize
 * @property bool|null $reverseOrder
 */
class ListClosedWorkflowExecutionsRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     startTimeFilter?: Shapes\ExecutionTimeFilter|null,
     *     closeTimeFilter?: Shapes\ExecutionTimeFilter|null,
     *     executionFilter?: Shapes\WorkflowExecutionFilter|null,
     *     closeStatusFilter?: Shapes\CloseStatusFilter|null,
     *     typeFilter?: Shapes\WorkflowTypeFilter|null,
     *     tagFilter?: Shapes\TagFilter|null,
     *     nextPageToken?: string|null,
     *     maximumPageSize?: int<0, 1000>|null,
     *     reverseOrder?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
