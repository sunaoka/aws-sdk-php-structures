<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\StopWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class StopWorkflowRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
