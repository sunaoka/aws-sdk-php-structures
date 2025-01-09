<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListWorkflows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $nextToken
 * @property int $maxResults
 * @property list<Shapes\WorkflowSortCriteria> $sortBy
 */
class ListWorkflowsRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     nextToken?: string,
     *     maxResults?: int,
     *     sortBy?: list<Shapes\WorkflowSortCriteria>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
