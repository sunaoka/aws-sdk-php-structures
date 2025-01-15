<?php

namespace Sunaoka\Aws\Structures\Swf\ListOpenWorkflowExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\ExecutionTimeFilter $startTimeFilter
 * @property Shapes\WorkflowTypeFilter|null $typeFilter
 * @property Shapes\TagFilter|null $tagFilter
 * @property string|null $nextPageToken
 * @property int<0, 1000>|null $maximumPageSize
 * @property bool|null $reverseOrder
 * @property Shapes\WorkflowExecutionFilter|null $executionFilter
 */
class ListOpenWorkflowExecutionsRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     startTimeFilter: Shapes\ExecutionTimeFilter,
     *     typeFilter?: Shapes\WorkflowTypeFilter|null,
     *     tagFilter?: Shapes\TagFilter|null,
     *     nextPageToken?: string|null,
     *     maximumPageSize?: int<0, 1000>|null,
     *     reverseOrder?: bool|null,
     *     executionFilter?: Shapes\WorkflowExecutionFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
