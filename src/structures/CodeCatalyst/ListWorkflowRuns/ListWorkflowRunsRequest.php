<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListWorkflowRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $workflowId
 * @property string $projectName
 * @property string $nextToken
 * @property int $maxResults
 * @property list<Shapes\WorkflowRunSortCriteria> $sortBy
 */
class ListWorkflowRunsRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     workflowId?: string,
     *     projectName: string,
     *     nextToken?: string,
     *     maxResults?: int,
     *     sortBy?: list<Shapes\WorkflowRunSortCriteria>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
