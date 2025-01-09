<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetWorkflowStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowId
 * @property string $stepGroupId
 * @property string $id
 */
class GetWorkflowStepRequest extends Request
{
    /**
     * @param array{
     *     workflowId: string,
     *     stepGroupId: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
