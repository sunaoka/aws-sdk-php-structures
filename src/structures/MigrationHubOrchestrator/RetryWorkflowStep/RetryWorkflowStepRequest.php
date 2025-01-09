<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\RetryWorkflowStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowId
 * @property string $stepGroupId
 * @property string $id
 */
class RetryWorkflowStepRequest extends Request
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
