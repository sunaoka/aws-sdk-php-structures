<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\StartWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class StartWorkflowRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
