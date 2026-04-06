<?php

namespace Sunaoka\Aws\Structures\NovaAct\ListWorkflowRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowDefinitionName
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'Ascending'|'Descending'|null $sortOrder
 */
class ListWorkflowRunsRequest extends Request
{
    /**
     * @param array{
     *     workflowDefinitionName: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     sortOrder?: 'Ascending'|'Descending'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
