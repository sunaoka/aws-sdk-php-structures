<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListWorkflows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property list<Shapes\WorkflowSortCriteria>|null $sortBy
 */
class ListWorkflowsRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     sortBy?: list<Shapes\WorkflowSortCriteria>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
