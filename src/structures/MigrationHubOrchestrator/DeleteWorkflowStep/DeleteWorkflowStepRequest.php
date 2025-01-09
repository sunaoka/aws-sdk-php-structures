<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\DeleteWorkflowStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $stepGroupId
 * @property string $workflowId
 */
class DeleteWorkflowStepRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     stepGroupId: string,
     *     workflowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
