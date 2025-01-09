<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListWorkflowSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<0, 100> $maxResults
 * @property string $workflowId
 * @property string $stepGroupId
 */
class ListWorkflowStepsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<0, 100>,
     *     workflowId: string,
     *     stepGroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
