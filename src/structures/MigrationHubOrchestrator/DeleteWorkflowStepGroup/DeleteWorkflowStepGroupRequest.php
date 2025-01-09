<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\DeleteWorkflowStepGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowId
 * @property string $id
 */
class DeleteWorkflowStepGroupRequest extends Request
{
    /**
     * @param array{
     *     workflowId: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
