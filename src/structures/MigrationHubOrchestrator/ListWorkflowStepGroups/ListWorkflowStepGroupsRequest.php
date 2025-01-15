<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListWorkflowStepGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<0, 100>|null $maxResults
 * @property string $workflowId
 */
class ListWorkflowStepGroupsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<0, 100>|null,
     *     workflowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
