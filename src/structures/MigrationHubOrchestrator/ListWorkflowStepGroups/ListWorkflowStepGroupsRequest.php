<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListWorkflowStepGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property string $workflowId
 */
class ListWorkflowStepGroupsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     workflowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
