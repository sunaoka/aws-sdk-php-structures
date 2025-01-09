<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetWorkflowStepGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $workflowId
 */
class GetWorkflowStepGroupRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     workflowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
