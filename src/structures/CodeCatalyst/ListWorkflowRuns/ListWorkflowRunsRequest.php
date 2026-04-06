<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListWorkflowRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string|null $workflowId
 * @property string $projectName
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 * @property list<Shapes\WorkflowRunSortCriteria>|null $sortBy
 */
class ListWorkflowRunsRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     workflowId?: string|null,
     *     projectName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     sortBy?: list<Shapes\WorkflowRunSortCriteria>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
